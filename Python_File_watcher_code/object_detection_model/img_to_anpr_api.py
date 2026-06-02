import asyncio
import aiohttp
import aiofiles
import os
import time
from asyncio import Queue

WATCH_DIR = "//home/parkinbial_pgs/srv/object_detection_model/search_kiosk_anpr_image"
API_URL = "http://192.168.10.5:8080/process-images"

BATCH_SIZE = 20
MAX_WAIT = 0.5
POLL = 0.2                 # slower = healthier
MAX_CONCURRENT_BATCHES = 3
QUEUE_MAXSIZE = 500

queue = Queue(maxsize=QUEUE_MAXSIZE)

# Tracks files currently queued or being sent
in_flight = set()


async def is_file_stable(path, wait=0.2):
    try:
        size1 = os.path.getsize(path)
        await asyncio.sleep(wait)
        size2 = os.path.getsize(path)
        return size1 == size2
    except FileNotFoundError:
        return False


async def watcher():
    while True:
        try:
            for name in os.listdir(WATCH_DIR):
                if not name.lower().endswith((".jpg", ".jpeg", ".png")):
                    continue

                path = os.path.join(WATCH_DIR, name)

                if path in in_flight:
                    continue

                if await is_file_stable(path):
                    try:
                        queue.put_nowait(path)
                        in_flight.add(path)
                    except asyncio.QueueFull:
                        print("[Watcher] ⚠️ Queue full, skipping:", name)

            await asyncio.sleep(POLL)

        except Exception as e:
            print("[Watcher] ❌ Error:", repr(e))
            await asyncio.sleep(1)


async def batch_sender(worker_id):
    timeout = aiohttp.ClientTimeout(total=30)

    async with aiohttp.ClientSession(timeout=timeout) as session:
        while True:
            try:
                batch = []
                start = time.time()

                while len(batch) < BATCH_SIZE:
                    remaining = MAX_WAIT - (time.time() - start)
                    if remaining <= 0:
                        break
                    try:
                        item = await asyncio.wait_for(queue.get(), remaining)
                        batch.append(item)
                    except asyncio.TimeoutError:
                        break

                if not batch:
                    await asyncio.sleep(0.05)
                    continue

                print(f"[Worker {worker_id}] 🚀 Sending batch of {len(batch)} images")

                data = aiohttp.FormData()
                files = []

                for path in batch:
                    name = os.path.basename(path)
                    f = await aiofiles.open(path, "rb")
                    files.append((f, path))
                    data.add_field(
                        "vehicle_image",
                        await f.read(),
                        filename=name,
                        content_type="image/jpeg",
                    )

                async with session.post(API_URL, data=data) as resp:
                    if resp.status == 200:
                        res = await resp.json()
                        if res.get("status"):
                            for _, path in files:
                                if os.path.exists(path):
                                    os.remove(path)
                                in_flight.discard(path)
                    else:
                        print(f"[Worker {worker_id}] ⚠️ HTTP {resp.status}")
                        for _, path in files:
                            in_flight.discard(path)

                for f, _ in files:
                    await f.close()

            except Exception as e:
                print(f"[Worker {worker_id}] ❌ Error:", repr(e))
                await asyncio.sleep(1)


async def main():
    print("✅ Async batch sender started")

    tasks = [asyncio.create_task(watcher())]

    for i in range(MAX_CONCURRENT_BATCHES):
        tasks.append(asyncio.create_task(batch_sender(i)))

    await asyncio.gather(*tasks, return_exceptions=True)


if __name__ == "__main__":
    asyncio.run(main())
