"""
FastAPI service — Tuya Lamp Batch Color Controller
====================================================
Receives a list of lamps with target colors from PHP (Laravel),
and sends the correct Tuya OpenAPI commands to each lamp.

Key optimizations for 50M API call budget:
  - Token caching: reuses the Tuya access token for its full 7200s lifetime
    (previously fetched a NEW token for every batch = 2x wasted calls)
  - Concurrent commands: all lamps in a batch run via asyncio.gather()
    (previously sequential = would time out on 100-lamp batches)
  - Shared HTTP client: one httpx client reused across requests
    (avoids TCP connection setup overhead per batch)

Tuya colour_data_v2 HSV scale:
  H: 0-360 degrees  (0 = red, 120 = green)
  S: 0-1000         (1000 = full saturation)
  V: 0-1000         (1000 = full brightness)
"""

import hashlib
import hmac
import json
import logging
import time
import asyncio
from typing import List, Optional
from contextlib import asynccontextmanager

import httpx
from fastapi import FastAPI, HTTPException
from pydantic import BaseModel, model_validator

# ─────────────────────────────────────────────
# Logging
# ─────────────────────────────────────────────
logging.basicConfig(
    level=logging.INFO,
    format="%(asctime)s  %(levelname)-8s  %(message)s",
    datefmt="%Y-%m-%d %H:%M:%S",
)
logger = logging.getLogger(__name__)

# ─────────────────────────────────────────────
# Tuya OpenAPI credentials  ← fill these in
# ─────────────────────────────────────────────
TUYA_CLIENT_ID     = "4auw95gn8ega"       # ← Tuya IoT Platform → Cloud → your project → Overview tab → "Access ID"
TUYA_CLIENT_SECRET = "cdc4525c8834"   # ← same page → "Access Secret" (click the eye icon to reveal)
TUYA_BASE_URL      = "https://openapi.tuyain.com"      # Region:
                                                        #   India → openapi.tuyain.com  ✅ (you are here)
                                                        #   US    → openapi.tuyaus.com
                                                        #   EU    → openapi.tuyaeu.com


# ─────────────────────────────────────────────
# Colour definitions (Tuya HSV scale)
# ─────────────────────────────────────────────
COLOUR_RED = {"h": 0,   "s": 1000, "v": 1000}   # All slots occupied
COLOUR_GREEN = {"h": 120, "s": 1000, "v": 1000}  # At least one slot free

# ─────────────────────────────────────────────
# Token Cache
# ─────────────────────────────────────────────
# Tuya tokens are valid for 7200 seconds (2 hours).
# We cache and reuse the token — refreshing only when it's about to expire.
# This saves 1 API call per batch (could be 1,000s of calls/day).
_cached_token: Optional[str] = None
_token_expires_at: float = 0.0
_token_lock = asyncio.Lock()  # prevents simultaneous token refreshes

# ─────────────────────────────────────────────
# Concurrency limiter
# ─────────────────────────────────────────────
# Tuya's API can handle many concurrent calls but will throttle if you
# blast all 400-1000 lamps simultaneously. A semaphore of 50 means:
#   400 lamps → 8 waves of 50 → ~4s total    ✅
#  1000 lamps → 20 waves of 50 → ~10s total   ✅
# Increase if your Tuya account has a higher rate limit.
TUYA_CONCURRENCY = 50
_semaphore: Optional[asyncio.Semaphore] = None

# ─────────────────────────────────────────────
# Shared HTTP client (reused across all requests)
# ─────────────────────────────────────────────
_http_client: Optional[httpx.AsyncClient] = None


@asynccontextmanager
async def lifespan(app: FastAPI):
    """Create shared HTTP client + semaphore at startup, close at shutdown."""
    global _http_client, _semaphore
    _semaphore = asyncio.Semaphore(TUYA_CONCURRENCY)
    _http_client = httpx.AsyncClient(
        limits=httpx.Limits(max_connections=200, max_keepalive_connections=100),
        timeout=httpx.Timeout(10.0, connect=5.0),
    )
    logger.info("HTTP client initialized (concurrency=%d)", TUYA_CONCURRENCY)
    yield
    await _http_client.aclose()
    logger.info("HTTP client closed")


# ─────────────────────────────────────────────
# FastAPI App
# ─────────────────────────────────────────────
app = FastAPI(
    title="Tuya Lamp Batch Controller",
    description="Controls Tuya Bluetooth lamps based on parking slot occupancy",
    version="3.0.0",
    lifespan=lifespan,
)

# ─────────────────────────────────────────────
# Pydantic models
# ─────────────────────────────────────────────
class LampUpdate(BaseModel):
    id: int          # tuya_lamps.id  (DB primary key — PHP uses this to update DB)
    tuya_id: str     # Tuya cloud device_id (the actual device identifier)
    color: str       # "red" or "green"


class BatchUpdateRequest(BaseModel):
    updates: List[LampUpdate]

    @model_validator(mode="before")
    @classmethod
    def _accept_bare_list(cls, v):
        """
        Accept BOTH payload shapes from PHP:

          Shape A (wrapped):  {"updates": [{id, tuya_id, color}, ...]}
          Shape B (bare list): [{id, tuya_id, color}, ...]

        Laravel's Http::post() can send either depending on how the array
        is passed.  This validator normalises both into Shape A so the
        rest of the model always sees {"updates": [...]}.
        """
        if isinstance(v, list):
            return {"updates": v}
        return v


class LampResult(BaseModel):
    tuya_id: str
    color: str
    success: bool
    error: str = ""


class BatchUpdateResponse(BaseModel):
    results: List[LampResult]
    total: int
    succeeded: int
    failed: int
    elapsed_ms: float


# ─────────────────────────────────────────────
# Tuya OpenAPI Auth — Standard Mode
# ─────────────────────────────────────────────
#
# Tuya uses a "canonical request" signature (similar to AWS Sig V4).
# The sign string is built as:
#
#   sign_str = ClientID + AccessToken + t + nonce + canonical_request
#
# Where canonical_request = HTTP_METHOD + "\n"
#                          + SHA256(body)  + "\n"
#                          + ""            + "\n"   (signed headers — empty)
#                          + url_path
#
# For the token endpoint: AccessToken="", nonce="", body=""
# For device commands:    AccessToken=<token>, nonce="", body=<json>
#
# Reference: https://github.com/tuya/tuya-connector-python

EMPTY_SHA256 = hashlib.sha256(b"").hexdigest()  # pre-computed for GET requests


def _canonical_sign(
    access_token: str,
    method: str,
    path: str,
    body: str = "",
    nonce: str = "",
) -> tuple[str, str]:
    """
    Build (t, sign) using Tuya Standard Mode canonical request signing.

    Returns a tuple of (t, sign) so headers can be assembled by the caller.
    """
    t = str(int(time.time() * 1000))

    body_sha256 = hashlib.sha256(body.encode("utf-8")).hexdigest() if body else EMPTY_SHA256

    canonical_request = "\n".join([
        method.upper(),   # e.g. "GET" or "POST"
        body_sha256,      # SHA256 of request body
        "",               # signed headers (empty for our requests)
        path,             # URL path WITHOUT query string, e.g. "/v1.0/token"
    ])

    sign_str = "".join([
        TUYA_CLIENT_ID,
        access_token,    # empty string for token endpoint
        t,
        nonce,           # empty string (nonce is optional)
        canonical_request,
    ])

    sign = hmac.new(
        TUYA_CLIENT_SECRET.encode("utf-8"),
        sign_str.encode("utf-8"),
        hashlib.sha256,
    ).hexdigest().upper()

    return t, sign


def _token_headers() -> dict:
    """Headers for GET /v1.0/token?grant_type=1 (no access_token)."""
    t, sign = _canonical_sign(
        access_token="",
        method="GET",
        path="/v1.0/token?grant_type=1",
        body="",
    )
    return {
        "client_id":    TUYA_CLIENT_ID,
        "sign":         sign,
        "sign_method":  "HMAC-SHA256",
        "t":            t,
        "nonce":        "",
        "Content-Type": "application/json",
    }


def _command_headers(access_token: str, path: str, body: str) -> dict:
    """Headers for authenticated POST device command requests."""
    t, sign = _canonical_sign(
        access_token=access_token,
        method="POST",
        path=path,
        body=body,
    )
    return {
        "client_id":    TUYA_CLIENT_ID,
        "access_token": access_token,
        "sign":         sign,
        "sign_method":  "HMAC-SHA256",
        "t":            t,
        "nonce":        "",
        "Content-Type": "application/json",
    }


async def _fetch_token() -> tuple:
    """Fetch a fresh Tuya access token using Standard Mode signing."""
    url = f"{TUYA_BASE_URL}/v1.0/token?grant_type=1"
    headers = _token_headers()

    resp = await _http_client.get(url, headers=headers)
    data = resp.json()

    logger.debug("Token response: %s", data)

    if not data.get("success"):
        raise RuntimeError(
            f"Tuya token fetch failed — code={data.get('code')} msg={data.get('msg')}\n"
            f"Check: TUYA_CLIENT_ID, TUYA_CLIENT_SECRET, TUYA_BASE_URL region"
        )

    result = data["result"]
    logger.info("Access token fetched OK (expires in %d s)", result["expire_time"])
    return result["access_token"], result["expire_time"]


def _invalidate_token() -> None:
    """Clear the token cache so the next request fetches a fresh token."""
    global _cached_token, _token_expires_at
    _cached_token = None
    _token_expires_at = 0.0
    logger.warning("Token cache cleared — next call will fetch fresh token")


async def _get_access_token() -> str:
    """
    Return a valid Tuya access token, fetching a new one only when needed.
    Thread-safe via asyncio.Lock.
    """
    global _cached_token, _token_expires_at

    if _cached_token and time.time() < (_token_expires_at - 60):
        return _cached_token

    async with _token_lock:
        if _cached_token and time.time() < (_token_expires_at - 60):
            return _cached_token
        token, expire_in = await _fetch_token()
        _cached_token = token
        _token_expires_at = time.time() + expire_in
        return _cached_token


async def _send_colour(device_id: str, colour: dict, access_token: str) -> dict:
    """
    Send a colour command to one Tuya device.
    Auto-retries once with a fresh token on code 1010 (token invalid).
    """
    path = f"/v1.0/devices/{device_id}/commands"
    url  = f"{TUYA_BASE_URL}{path}"
    payload = {
        "commands": [
            {"code": "work_mode",      "value": "colour"},
            {"code": "colour_data_v2", "value": colour},
        ]
    }
    body_str = json.dumps(payload, separators=(",", ":"))

    for attempt in range(2):
        headers = _command_headers(access_token, path, body_str)
        try:
            resp = await _http_client.post(url, headers=headers, content=body_str)
            data = resp.json()

            if data.get("success"):
                return {"success": True}

            code = data.get("code")

            if code == 1010 and attempt == 0:
                logger.warning("[1010] Token invalid for %s — refreshing and retrying", device_id)
                _invalidate_token()
                try:
                    access_token = await _get_access_token()
                except Exception as exc:
                    return {"success": False, "error": f"token refresh failed: {exc}"}
                continue

            return {"success": False, "error": f"code={code} msg={data.get('msg')}"}

        except httpx.TimeoutException:
            return {"success": False, "error": "timeout"}
        except Exception as exc:
            return {"success": False, "error": str(exc)}

    return {"success": False, "error": "failed after token refresh retry"}


# ─────────────────────────────────────────────
# Endpoints
# ─────────────────────────────────────────────
@app.get("/health")
async def health():
    """Health-check — called by PHP/monitoring to confirm service is running."""
    return {
        "status":         "ok",
        "service":        "tuya-lamp-controller",
        "token_cached":   _cached_token is not None,
        "token_valid_s":  max(0, round(_token_expires_at - time.time())),
        "concurrency_limit": TUYA_CONCURRENCY,
    }


@app.post("/batch-update", response_model=BatchUpdateResponse)
async def batch_update(request: BatchUpdateRequest):
    """
    Receive a batch of lamp→color assignments and apply them to Tuya.

    Expected JSON body (sent by Laravel UpdateTuyaLampColorsBatchJob):
    {
      "updates": [
        {"id": 1, "tuya_id": "abc123xyz", "color": "red"},
        {"id": 2, "tuya_id": "def456uvw", "color": "green"}
      ]
    }

    Response:
    {
      "results": [{"tuya_id": "abc123xyz", "color": "red", "success": true, "error": ""}, ...],
      "total": 2, "succeeded": 2, "failed": 0, "elapsed_ms": 320.5
    }
    """
    start = time.monotonic()
    updates = request.updates

    if not updates:
        return BatchUpdateResponse(results=[], total=0, succeeded=0, failed=0, elapsed_ms=0.0)

    logger.info("Batch received — %d lamps", len(updates))

    # 1️⃣  Get cached token (one call shared across all concurrent lamps)
    try:
        access_token = await _get_access_token()
    except Exception as exc:
        logger.error("Failed to obtain Tuya token: %s", exc)
        raise HTTPException(status_code=502, detail=f"Tuya auth failed: {exc}")

    # 2️⃣  Send all colour commands concurrently
    async def process_lamp(lamp: LampUpdate) -> LampResult:
        colour = COLOUR_RED if lamp.color == "red" else COLOUR_GREEN
        # Semaphore limits concurrent Tuya calls to TUYA_CONCURRENCY at a time
        async with _semaphore:
            outcome = await _send_colour(lamp.tuya_id, colour, access_token)
        status_icon = "✅" if outcome["success"] else "❌"
        logger.info("  %s %s → %s  %s", status_icon, lamp.tuya_id, lamp.color, outcome.get("error", ""))
        return LampResult(
            tuya_id=lamp.tuya_id,
            color=lamp.color,
            success=outcome["success"],
            error=outcome.get("error", ""),
        )

    results: list[LampResult] = list(
        await asyncio.gather(*[process_lamp(lamp) for lamp in updates])
    )

    elapsed_ms = (time.monotonic() - start) * 1000
    succeeded  = sum(1 for r in results if r.success)
    failed     = len(results) - succeeded

    logger.info(
        "Batch done — %d/%d ok | %d failed | %.0f ms",
        succeeded, len(results), failed, elapsed_ms,
    )

    return BatchUpdateResponse(
        results=results,
        total=len(results),
        succeeded=succeeded,
        failed=failed,
        elapsed_ms=round(elapsed_ms, 1),
    )


# ─────────────────────────────────────────────
# Run:  uvicorn fastapi:app --host 0.0.0.0 --port 8000
# ─────────────────────────────────────────────
