import os
import time
import asyncio
import aiohttp
from asyncio import Queue
from concurrent.futures import ThreadPoolExecutor

WATCH_DIR = "/home/parkinbial_pgs/srv/object_detection_model/crop_image_pgs"
API_URL = "http://192.168.10.5:6000/process-image"

BATCH_SIZE = 10
MAX_WORKERS = 12
QUEUE_LIMIT = 2000
POLL = 0.2

executor = ThreadPoolExecutor(max_workers=16)


def is_file_stable_sync(path, wait=0.15):
    try:
        s1 = os.path.getsize(path)
        time.sleep(wait)
        s2 = os.path.getsize(path)
        return s1 == s2
    except FileNotFoundError:
        return False


async def enqueue_startup_files(queue: Queue, in_progress: set, lock: asyncio.Lock):
    for fname in os.listdir(WATCH_DIR):
        if not fname.lower().endswith((".jpg", ".jpeg", ".png")):
            continue

        async with lock:
            if fname in in_progress:
                continue
            in_progress.add(fname)

        await queue.put(fname)

    print("✅ Startup scan completed")


async def file_watcher(queue: Queue, in_progress: set, lock: asyncio.Lock):
    loop = asyncio.get_running_loop()

    while True:
        for fname in os.listdir(WATCH_DIR):
            if not fname.lower().endswith((".jpg", ".jpeg", ".png")):
                continue

            async with lock:
                if fname in in_progress:
                    continue

            path = os.path.join(WATCH_DIR, fname)

            stable = await loop.run_in_executor(
                executor, is_file_stable_sync, path
            )

            if stable:
                async with lock:
                    if fname in in_progress:
                        continue
                    in_progress.add(fname)

                await queue.put(fname)

        await asyncio.sleep(POLL)


async def upload_worker(
    name: int,
    queue: Queue,
    session: aiohttp.ClientSession,
    in_progress: set,
    lock: asyncio.Lock
):
    while True:
        batch = []

        # ✅ CORRECT batching logic (this fixes speed)
        while len(batch) < BATCH_SIZE:
            try:
                fname = await asyncio.wait_for(queue.get(), timeout=0.05)
                batch.append(fname)
            except asyncio.TimeoutError:
                break

        if not batch:
            continue

        data = aiohttp.FormData()
        files = []

        try:
            for fname in batch:
                path = os.path.join(WATCH_DIR, fname)
                f = open(path, "rb")
                files.append(f)
                data.add_field(
                    "images",
                    f,
                    filename=fname,
                    content_type="image/jpeg"
                )

            start = time.monotonic()

            async with session.post(API_URL, data=data, timeout=30) as resp:
                res = await resp.json()

            end = time.monotonic()

            print(
                f"Worker {name}: API took {end - start:.2f}s | batch={len(batch)}"
            )

            if resp.status == 200 and res.get("status"):
                for fname in batch:
                    os.remove(os.path.join(WATCH_DIR, fname))
                    async with lock:
                        in_progress.discard(fname)
                print(f"Worker {name}: processed {len(batch)}")
            else:
                async with lock:
                    for fname in batch:
                        in_progress.discard(fname)

        except Exception as e:
            print(f"Worker {name} error:", e)
            async with lock:
                for fname in batch:
                    in_progress.discard(fname)

        finally:
            for f in files:
                f.close()


async def main():
    queue = Queue(maxsize=QUEUE_LIMIT)
    in_progress = set()
    lock = asyncio.Lock()

    async with aiohttp.ClientSession(
        connector=aiohttp.TCPConnector(limit=50)
    ) as session:

        await enqueue_startup_files(queue, in_progress, lock)

        tasks = [
            asyncio.create_task(file_watcher(queue, in_progress, lock))
        ]

        for i in range(MAX_WORKERS):
            tasks.append(
                asyncio.create_task(
                    upload_worker(i, queue, session, in_progress, lock)
                )
            )

        await asyncio.gather(*tasks)


if __name__ == "__main__":
    print("🚀 High-throughput file watcher started (batching fixed)")
    asyncio.run(main())
