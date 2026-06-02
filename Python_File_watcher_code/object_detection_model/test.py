from paddleocr import PaddleOCR

ocr = PaddleOCR(
    use_gpu=True,
    use_angle_cls=True,
    lang='en'
)

result = ocr.ocr("test.jpg")

for line in result:
    print(line)
