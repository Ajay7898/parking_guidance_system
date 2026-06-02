import os
import time
import json
import cv2
import logging
import threading
import pandas as pd
from pathlib import Path
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

# =====================================================
# CONFIGURATION
# =====================================================

WATCH_PATH = "/home/parkinbial_pgs/srv/SFTP_camera_images"

CAMERA_CSV = "/home/parkinbial_pgs/srv/object_detection_model/files/bial_cameras_ip.csv"
SLOT_CSV   = "/home/parkinbial_pgs/srv/object_detection_model/files/bial_parking_slots.csv"
COORD_JSON = "/home/parkinbial_pgs/srv/object_detection_model/files/bial_coordinate.json"

OUTPUT_DIRS = [
    "/home/parkinbial_pgs/srv/object_detection_model/crop_image_pgs",
    "/home/parkinbial_pgs/srv/object_detection_model/search_kiosk_anpr_image",
    "/home/parkinbial_pgs/srv/object_detection_model/kiosk_image",
    "/var/www/html/bial_pgs/public/Kiosk_images_main"

]




LOG_FILE         = "/home/parkinbial_pgs/srv/object_detection_model/files/unified_crop.log"
LOG_WARNINGS_FILE = "/home/parkinbial_pgs/srv/object_detection_model/files/bad_coordinates.log"

NUM_WORKERS = 8
WORKER_INTERVAL = 0.05
SUPPORTED_EXT = (".jpg", ".jpeg")

# =====================================================
# LOGGING
# =====================================================

# Main logger — all levels (INFO, WARNING, ERROR, etc.)
logging.basicConfig(
    level=logging.INFO,
    format="%(asctime)s | %(levelname)s | %(message)s",
    handlers=[
        logging.FileHandler(LOG_FILE),
        logging.StreamHandler()
    ]
)

# Secondary logger — WARNING only (bad / out-of-bound coordinates)
_warn_handler = logging.FileHandler(LOG_WARNINGS_FILE)
_warn_handler.setLevel(logging.WARNING)
_warn_handler.setFormatter(logging.Formatter("%(asctime)s | %(levelname)s | %(message)s"))

coord_warn_logger = logging.getLogger("coord_warnings")
coord_warn_logger.setLevel(logging.WARNING)
coord_warn_logger.addHandler(_warn_handler)
coord_warn_logger.propagate = False  # don't duplicate into root logger

# =====================================================
# LOAD CAMERA DATA
# =====================================================

camera_df = pd.read_csv(CAMERA_CSV, dtype=str)
camera_df.columns = camera_df.columns.str.strip()

CAMERA_MAP = dict(zip(camera_df["ip_address"], camera_df["id"]))

slot_df = pd.read_csv(SLOT_CSV)

CAMERA_TO_SLOTS = (
    slot_df.groupby("camera_id")["id"]
    .apply(list)
    .to_dict()
)

with open(COORD_JSON) as f:
    COORDS = json.load(f)

for d in OUTPUT_DIRS:
    os.makedirs(d, exist_ok=True)

logging.info(f"Loaded {len(CAMERA_MAP)} cameras")
logging.info(f"Loaded {len(COORDS)} slot coordinates")

# =====================================================
# GLOBAL STATE (LATEST IMAGE BUFFER)
# =====================================================

latest_files = {}
latest_lock = threading.Lock()

# =====================================================
# HELPER FUNCTIONS
# =====================================================

def extract_camera_ip(file_path):
    """
    Extract camera folder name from path.
    """
    try:
        rel = Path(file_path).relative_to(WATCH_PATH)
        return rel.parts[0]
    except Exception:
        return None


def wait_until_file_ready(path, timeout=3):

    last_size = -1
    start = time.time()

    while time.time() - start < timeout:

        try:
            size = os.path.getsize(path)

            if size == last_size and size > 0:
                return True

            last_size = size

        except FileNotFoundError:
            pass

        time.sleep(0.03)

    return False

# =====================================================
# CORE IMAGE PROCESSING
# =====================================================

def process_image(file_path):

    try:

        if not file_path.lower().endswith(SUPPORTED_EXT):
            return

        if not wait_until_file_ready(file_path):
            return

        camera_ip = extract_camera_ip(file_path)

        if camera_ip not in CAMERA_MAP:
            return

        camera_id = int(CAMERA_MAP[camera_ip])

        img = cv2.imread(file_path)

        if img is None:
            return

        h_img, w_img = img.shape[:2]

        for slot_id in CAMERA_TO_SLOTS.get(camera_id, []):

            sid = str(slot_id)

            if sid not in COORDS:
                continue

            c = COORDS[sid]

            x = c["x"]
            y = c["y"]
            w = c["w"]
            h = c["h"]

            # Clamp origin so it never exceeds image size
            x1 = max(0, min(x, w_img - 1))
            y1 = max(0, min(y, h_img - 1))

            # Clamp end, then force at least 1px so the crop is never empty
            x2 = max(x1 + 1, min(x + w, w_img))
            y2 = max(y1 + 1, min(y + h, h_img))

            # Log bad coordinates but still produce the closest valid crop
            if x + w > w_img or y + h > h_img or x < 0 or y < 0:
                msg = (
                    f"Slot {sid} | bad coordinates (x={x}, y={y}, w={w}, h={h}) "
                    f"| image size {w_img}x{h_img} | clamped to ({x1},{y1},{x2},{y2}) "
                    f"| file: {file_path}"
                )
                logging.warning(msg)
                coord_warn_logger.warning(msg)

            crop = img[y1:y2, x1:x2]

            for out_dir in OUTPUT_DIRS:

                out_path = os.path.join(out_dir, f"{sid}.jpg")

                cv2.imwrite(
                    out_path,
                    crop,
                    [int(cv2.IMWRITE_JPEG_QUALITY), 90]
                )

        logging.info(f"✓ Camera {camera_id} processed")

    except Exception as e:

        logging.error(
            f"Processing error {file_path}: {e}",
            exc_info=True
        )

# =====================================================
# WORKER THREADS
# =====================================================

def worker():

    while True:

        time.sleep(WORKER_INTERVAL)

        with latest_lock:

            items = list(latest_files.items())

            latest_files.clear()

        for _, path in items:

            process_image(path)

# =====================================================
# WATCHDOG HANDLER
# =====================================================

class ImageHandler(FileSystemEventHandler):

    def on_created(self, event):

        if event.is_directory:
            return

        if not event.src_path.lower().endswith(SUPPORTED_EXT):
            return

        camera_ip = extract_camera_ip(event.src_path)

        if camera_ip not in CAMERA_MAP:
            return

        with latest_lock:

            latest_files[camera_ip] = event.src_path

# =====================================================
# MAIN
# =====================================================

if __name__ == "__main__":

    for _ in range(NUM_WORKERS):

        threading.Thread(
            target=worker,
            daemon=True
        ).start()

    observer = Observer()

    observer.schedule(
        ImageHandler(),
        WATCH_PATH,
        recursive=True
    )

    observer.start()

    logging.info("========================================")
    logging.info("🚀 Real-Time Camera Crop Service")
    logging.info("Mode: Latest frame per camera")
    logging.info(f"Watching: {WATCH_PATH}")
    logging.info(f"Workers: {NUM_WORKERS}")
    logging.info("========================================")

    try:

        while True:
            time.sleep(1)

    except KeyboardInterrupt:

        logging.info("Stopping service...")

        observer.stop()

    observer.join()
