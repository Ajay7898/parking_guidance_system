# =========================================================
# CUDA SAFETY
# =========================================================
import os
import torch
torch.backends.cudnn.enabled       = True
torch.backends.cudnn.benchmark     = True    # safe with EasyOCR/PyTorch — finds fastest conv algo
torch.backends.cudnn.deterministic = False   # must be False when benchmark=True

# =========================================================
# IMPORTS
# =========================================================
import re
import cv2
import numpy as np
import requests
import threading
import easyocr                         # PyTorch-native OCR — same CUDA runtime as YOLO
from flask import Flask, request, jsonify
from ultralytics import YOLO

# =========================================================
# CONFIG
# =========================================================
MODEL_PATH = "/home/parkinbial_pgs/srv/object_detection_model/models/best_ocr.pt"
IMG_SIZE   = 640
CONF_THRES = 0.35

DEVICE   = "cuda" if torch.cuda.is_available() else "cpu"

# =========================================================
# TARGET API CONFIG
# =========================================================
UPDATE_API_URL     = "http://192.168.10.5/api/update-parking-vsk"
UPDATE_API_TIMEOUT = 5

# =========================================================
# SAFETY CHECKS
# =========================================================
if not os.path.isfile(MODEL_PATH):
    raise RuntimeError(f"YOLO model not found: {MODEL_PATH}")

print(f"🚀 YOLO device : {DEVICE}")
print(f"🧠 OCR  device : {DEVICE}  (EasyOCR — PyTorch GPU, cuDNN 9.x compatible)")
print("🎯 ANPR Pipeline v6.0  (BH-series + EV green plate + GPU-stable)")

# =========================================================
# LOAD YOLO MODEL
# =========================================================
plate_detector = YOLO(MODEL_PATH)
plate_detector.to(DEVICE)

# =========================================================
# LAZY EASYOCR INITIALISATION (post-fork, per worker)
# EasyOCR uses PyTorch — same CUDA/cuDNN 9.x runtime as YOLO.
# No cuDNN version mismatch, no SIGSEGV.
# =========================================================
_ocr      = None
_ocr_lock = threading.Lock()

def get_ocr() -> easyocr.Reader:
    """Return per-worker EasyOCR reader, created on first request (post-fork)."""
    global _ocr
    if _ocr is None:
        with _ocr_lock:
            if _ocr is None:
                print(f"  [OCR] Initialising EasyOCR on {DEVICE} (PID {os.getpid()})")
                _ocr = easyocr.Reader(
                    ['en'],
                    gpu=(DEVICE == "cuda"),
                    verbose=False,
                    quantize=False
                )
                print(f"  [OCR] EasyOCR ready on {DEVICE} (PID {os.getpid()})")
    return _ocr

# =========================================================
# FLASK APP
# =========================================================
app = Flask(__name__)

# =========================================================
# PLATE PATTERNS
# Standard Indian:  KL01AB1234  / KA05MN9999
# BH-series:        25BH3938AA  (YY BH NNNN LL)
# EV plates:        same formats, green background
# =========================================================
PLATE_PATTERNS = [
    re.compile(r"^[A-Z]{2}\d{1,2}[A-Z]{1,2}\d{4}$"),      # standard
    re.compile(r"^\d{2}BH\d{4}[A-Z]{1,2}$"),               # BH-series
    re.compile(r"^[A-Z]{2}\d{1,2}[A-Z]{1,3}\d{4}$"),       # 3-letter series
]

# =========================================================
# CHARACTER CONFUSION CORRECTION
# =========================================================
DIGIT_TO_LETTER = {'0': 'O', '1': 'I', '5': 'S', '8': 'B', '6': 'G', '2': 'Z'}
LETTER_TO_DIGIT = {'O': '0', 'I': '1', 'L': '1', 'S': '5', 'B': '8', 'G': '6', 'Z': '2'}

def fix_common_ocr_mistakes(text):
    """
    Context-aware correction for standard and BH-series plates.

    Standard:  [LL][DD][LL][DDDD]
    BH-series: [DD][BH][DDDD][LL]
    """
    if not text:
        return text
    t = list(text)
    n = len(t)

    looks_bh = (n >= 4
                and t[0].isdigit() and t[1].isdigit()
                and t[2].upper() in ('B', '8')
                and t[3].upper() in ('H', '#'))

    if looks_bh:
        for i in range(min(2, n)):          # year → digits
            if t[i].isalpha():
                t[i] = LETTER_TO_DIGIT.get(t[i].upper(), t[i])
        if n > 2 and t[2] == '8':  t[2] = 'B'
        if n > 3 and t[3] in ('4', '#', 'l', 'L'):  t[3] = 'H'
        for i in range(4, min(8, n)):       # serial → digits
            if t[i].isalpha():
                t[i] = LETTER_TO_DIGIT.get(t[i].upper(), t[i])
        for i in range(8, n):               # category → letters
            if t[i].isdigit():
                t[i] = DIGIT_TO_LETTER.get(t[i], t[i])
    else:
        for i in range(min(2, n)):          # state code → letters
            if t[i].isdigit():
                t[i] = DIGIT_TO_LETTER.get(t[i], t[i])
        for i in range(2, min(4, n)):       # district → digits
            if t[i].isalpha():
                t[i] = LETTER_TO_DIGIT.get(t[i].upper(), t[i])
        if n > 8:
            for i in range(4, n - 4):      # series → letters
                if t[i].isdigit():
                    t[i] = DIGIT_TO_LETTER.get(t[i], t[i])
        for i in range(max(0, n - 4), n):  # serial → digits
            if t[i].isalpha():
                t[i] = LETTER_TO_DIGIT.get(t[i].upper(), t[i])

    return ''.join(t)

# =========================================================
# PLATE VALIDATION & CLEANING
# =========================================================
def clean_plate(text):
    """Validate and clean plate (standard, BH-series, EV)."""
    if not text:
        return None
    text = re.sub(r"[^A-Z0-9]", "", text.upper())
    if len(text) < 8 or len(text) > 11:
        return None
    text = fix_common_ocr_mistakes(text)
    for pattern in PLATE_PATTERNS:
        if pattern.match(text):
            return text
    for pattern in PLATE_PATTERNS:
        m = pattern.search(text)
        if m:
            return m.group(0)
    if len(text) >= 9 and text[:2].isalpha() and text[-4:].isdigit():
        return text
    if len(text) >= 8 and text[:2].isdigit() and text[2:4] == "BH" and text[4:8].isdigit():
        return text
    return None

# =========================================================
# PREPROCESSING
# =========================================================
def preprocess_plate_crop(crop):
    """Standard: CLAHE + bilateral + sharpening."""
    gray = cv2.cvtColor(crop, cv2.COLOR_BGR2GRAY)
    h, w = gray.shape
    if h < 60:
        gray = cv2.resize(gray, (int(w * 80 / h), 80), interpolation=cv2.INTER_CUBIC)
    enhanced = cv2.createCLAHE(clipLimit=3.0, tileGridSize=(8, 8)).apply(gray)
    denoised = cv2.bilateralFilter(enhanced, 9, 75, 75)
    kernel   = np.array([[-1,-1,-1],[-1,9,-1],[-1,-1,-1]])
    sharpened = cv2.filter2D(denoised, -1, kernel)
    return cv2.cvtColor(sharpened, cv2.COLOR_GRAY2BGR)


def preprocess_for_dark_bg(crop):
    """Invert dark-background plates (EV green / diplomat black)."""
    gray = cv2.cvtColor(crop, cv2.COLOR_BGR2GRAY)
    h, w = gray.shape
    if h < 60:
        gray = cv2.resize(gray, (int(w * 80 / h), 80), interpolation=cv2.INTER_CUBIC)
    inverted  = cv2.bitwise_not(gray)
    enhanced  = cv2.createCLAHE(clipLimit=2.5, tileGridSize=(8, 8)).apply(inverted)
    denoised  = cv2.bilateralFilter(enhanced, 9, 75, 75)
    kernel    = np.array([[-1,-1,-1],[-1,9,-1],[-1,-1,-1]])
    sharpened = cv2.filter2D(denoised, -1, kernel)
    return cv2.cvtColor(sharpened, cv2.COLOR_GRAY2BGR)


def detect_dark_background(crop):
    """True if mean luminance < 100 (EV green plates etc.)."""
    return cv2.cvtColor(crop, cv2.COLOR_BGR2GRAY).mean() < 100


# =========================================================
# OCR RUNNER
# =========================================================
def run_ocr(image):
    """Run EasyOCR (GPU) and return (text, confidence)."""
    try:
        results = get_ocr().readtext(image, detail=1, paragraph=False)
        if results:
            text = "".join([r[1] for r in results])
            conf = max([r[2] for r in results])
            return text, conf
    except Exception as e:
        print(f"  OCR error: {e}")
    return None, 0.0


# =========================================================
# MULTI-METHOD PLATE EXTRACTION
# =========================================================
def extract_plate_number(crop):
    """Try multiple preprocessing variants; return best plate."""
    if crop is None or crop.size == 0:
        return None
    if crop.shape[0] < 20 or crop.shape[1] < 60:
        return None

    candidates = []
    is_dark    = detect_dark_background(crop)

    def try_ocr(label, image):
        text, conf = run_ocr(image)
        cleaned    = clean_plate(text) if text else None
        if cleaned:
            print(f"  [{label}] → {cleaned}  (conf={conf:.2f})")
            candidates.append((cleaned, conf))

    # Method 1: Raw crop
    try_ocr("raw", crop)

    # Method 2: CLAHE + sharpen
    try_ocr("enhanced", preprocess_plate_crop(crop))

    # Method 3: Adaptive threshold (BH yellow-on-black)
    try:
        gray = cv2.cvtColor(crop, cv2.COLOR_BGR2GRAY)
        h, w = gray.shape
        if h < 60:
            gray = cv2.resize(gray, (int(w * 80 / h), 80), interpolation=cv2.INTER_CUBIC)
        binary = cv2.adaptiveThreshold(
            gray, 255, cv2.ADAPTIVE_THRESH_GAUSSIAN_C, cv2.THRESH_BINARY, 11, 2
        )
        try_ocr("adaptive-thresh", cv2.cvtColor(binary, cv2.COLOR_GRAY2BGR))
    except Exception as e:
        print(f"  Method 3 error: {e}")

    # Method 4: Inversion (EV green plates + low-contrast)
    if is_dark:
        print("  🟢 Dark background detected — trying inverted preprocessing")
    try_ocr("dark-inv", preprocess_for_dark_bg(crop))

    # Method 5: 2× upscale (small/distant plates)
    try:
        upscaled = cv2.resize(crop, None, fx=2, fy=2, interpolation=cv2.INTER_CUBIC)
        try_ocr("upscaled-2x", upscaled)
    except Exception as e:
        print(f"  Method 5 error: {e}")

    if not candidates:
        print("  ✗ No valid plate detected")
        return None

    unique = {}
    for plate, conf in candidates:
        if plate not in unique or conf > unique[plate]:
            unique[plate] = conf

    best_plate, best_conf = max(unique.items(), key=lambda x: x[1])
    print(f"  ✓ Final: {best_plate}  (conf={best_conf:.2f})")
    return best_plate


# =========================================================
# SEND RESULT TO PARKING API
# =========================================================
def send_result_to_parking_api(payload):
    try:
        resp = requests.post(UPDATE_API_URL, json=payload, timeout=UPDATE_API_TIMEOUT)
        return resp.status_code, resp.text
    except Exception as e:
        return None, str(e)


# =========================================================
# API ENDPOINT
# =========================================================
@app.route("/process-images", methods=["POST"])
def process_images():
    try:
        files = request.files.getlist("vehicle_image")
        if not files:
            return jsonify({"status": False, "error": "No images"}), 400

        images, filenames = [], []
        for f in files:
            try:
                buf = np.frombuffer(f.read(), np.uint8)
                img = cv2.imdecode(buf, cv2.IMREAD_COLOR)
                if img is not None:
                    images.append(img)
                    filenames.append(f.filename)
            except Exception as e:
                print(f"Error reading {f.filename}: {e}")

        if not images:
            return jsonify({"status": False, "error": "Invalid images"}), 400

        # YOLO batch inference (GPU)
        results = plate_detector.predict(
            images,
            imgsz=IMG_SIZE,
            conf=CONF_THRES,
            device=DEVICE,
            half=False,
            stream=False,
            verbose=False
        )

        response = []
        for idx, r in enumerate(results):
            plate_number = None
            img = images[idx]
            print(f"\n📷 Processing: {filenames[idx]}")

            if r.boxes is not None and len(r.boxes) > 0:
                best_idx     = r.boxes.conf.argmax()
                x1,y1,x2,y2 = r.boxes.xyxy[best_idx].int().tolist()
                h, w         = img.shape[:2]
                pad          = 12
                x1, y1       = max(0, x1-pad), max(0, y1-pad)
                x2, y2       = min(w, x2+pad), min(h, y2+pad)
                crop         = img[y1:y2, x1:x2]
                if crop is not None and crop.size > 0:
                    plate_number = extract_plate_number(crop)
            else:
                print("  ⚠ No plate box detected by YOLO")

            response.append({
                "filename": os.path.splitext(filenames[idx])[0],
                "number"  : plate_number
            })

        payload    = {"status": True, "results": response}
        api_status, _ = send_result_to_parking_api(payload)
        print(f"\n➡  Sent to parking API: HTTP {api_status}")

        return jsonify({
            "status"                   : True,
            "results"                  : response,
            "forwarded_to_parking_api" : api_status == 200
        }), 200

    except Exception as e:
        print(f"Error in process_images: {str(e)}")
        return jsonify({"status": False, "error": str(e)}), 500


# =========================================================
# HEALTH CHECK
# =========================================================
@app.route("/health", methods=["GET"])
def health_check():
    return jsonify({
        "status"        : "ok",
        "device"        : DEVICE,
        "half_precision": USE_HALF,
        "ocr_backend"   : "paddleocr",
        "ocr_gpu"       : (DEVICE == "cuda"),
        "ocr_ready"     : _ocr is not None
    }), 200


# =========================================================
# RUN SERVER
# =========================================================
if __name__ == "__main__":
    app.run(host="0.0.0.0", port=8080, debug=False, threaded=True)
