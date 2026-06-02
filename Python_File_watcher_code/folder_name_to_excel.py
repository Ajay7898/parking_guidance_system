import os
import re
from openpyxl import Workbook

path = "/home/parkinbial_pgs/srv/SFTP_camera_images"

# Get folder names only
ips = [d for d in os.listdir(path) if os.path.isdir(os.path.join(path, d))]

# Function to extract last 4 numeric values safely
def sort_key(folder_name):
    parts = folder_name.split("-")[-4:]
    numbers = []

    for part in parts:
        # Extract first number found in the string
        match = re.search(r'\d+', part)
        if match:
            numbers.append(int(match.group()))
        else:
            numbers.append(0)  # fallback if no number found

    return numbers

# Sort folders using extracted numeric values
ips.sort(key=sort_key)

# Create Excel file
wb = Workbook()
ws = wb.active
ws.title = "Camera_Folder_Names"

# Header
ws.append(["Folder_Name"])

# Add folder names
for ip in ips:
    ws.append([ip])

# Save file
output_file = "camera_folder_name.xlsx"
wb.save(output_file)

print(f"✅ Excel file created: {output_file}")
print(f"📊 Total folders processed: {len(ips)}")
