<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OptimizeUpdateTuyaLampColorsBatchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $updates;
    public $tries = 3;
    public $backoff = [5, 30, 60];
    public $timeout = 60; // seconds — 100 lamps can take up to 30s in FastAPI

    protected $batchId;

    public function __construct($updates)
    {
        $this->updates = $updates;
        $this->batchId = uniqid('batch_', true);
    }

    public function handle()
    {
        $startTime = microtime(true);
        $lampsCount = count($this->updates);

        Log::info("[{$this->batchId}] Starting batch job", [
            'lamps' => $lampsCount,
            'attempt' => $this->attempts(),
            'queue_size' => DB::table('jobs')->count(),
        ]);

        try 
        {
            $response = Http::timeout(30)
                ->post(
                    'http://192.168.10.5:8000/batch-update',
                    $this->updates
                );

            $elapsed = (microtime(true) - $startTime) * 1000;

            Log::info("[{$this->batchId}] FastAPI response received", [
                'status' => $response->status(),
                'elapsed_ms' => number_format($elapsed, 1),
                'lamps' => $lampsCount,
            ]);

            if (!$response->successful()) {
                Log::error("[{$this->batchId}] FastAPI returned error", [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                // Fail gracefully, will retry
                $this->release(30); 
                return;
            }

            // Parse per-lamp results
            $body = $response->json();
            $results = $body['results'] ?? [];
            $succeededIds = collect($results)
                ->where('success', true)
                ->pluck('tuya_id')
                ->toArray();

            $failedIds = collect($results)
                ->where('success', false)
                ->pluck('tuya_id')
                ->toArray();

            $successCount = count($succeededIds);
            $failCount = count($failedIds);

            // Update DB only for succeeded lamps
            foreach ($this->updates as $item) {
                if (in_array($item['tuya_id'], $succeededIds)) {
                    DB::table('tuya_lamps')
                        ->where('id', $item['id'])
                        ->update([
                            'current_color' => $item['color'],
                            'last_api_call' => now(),
                            'api_status' => 'success',
                            'updated_at' => now(),
                        ]);
                }
            }

            // Log failed lamps separately for troubleshooting
            if ($failCount > 0) {
                foreach ($failedIds as $failedId) {
                    Log::warning("[{$this->batchId}] Lamp failed", [
                        'tuya_id' => $failedId,
                    ]);

                    // Mark lamp as failed in DB for visibility
                    DB::table('tuya_lamps')
                        ->where('tuya_lamp_id', $failedId)
                        ->update([
                            'api_status' => 'failed',
                            'last_api_call' => now(),
                        ]);
                }
            }

            $elapsed = (microtime(true) - $startTime) * 1000;

            if ($failCount === 0) {
                Log::info("[{$this->batchId}] ✅ ALL SUCCEEDED", [
                    'success' => $successCount,
                    'total' => $lampsCount,
                    'elapsed_ms' => number_format($elapsed, 1),
                ]);
            } else {
                Log::warning("[{$this->batchId}] ⚠️  PARTIAL SUCCESS", [
                    'success' => $successCount,
                    'failed' => $failCount,
                    'total' => $lampsCount,
                    'failed_lamps' => $failedIds,
                    'elapsed_ms' => number_format($elapsed, 1),
                ]);
            }

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            Log::error("[{$this->batchId}] FastAPI unreachable", [
                'error' => $e->getMessage(),
                'attempt' => $this->attempts(),
            ]);
            $this->release(60); // retry in 60s if API is down

        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error("[{$this->batchId}] HTTP error from FastAPI", [
                'status' => $e->response->status(),
                'error' => $e->getMessage(),
            ]);
            if ($this->attempts() <= $this->tries) {
                $this->release(30);
            } else {
                Log::error("[{$this->batchId}] Max retries exceeded, giving up");
            }

        } catch (\Exception $e) {
            Log::error("[{$this->batchId}] Unexpected exception", [
                'error' => $e->getMessage(),
                'exception' => get_class($e),
                'trace' => $e->getTraceAsString(),
            ]);
            throw $e; // Laravel will retry based on $tries
        }
    }

    /**
     * Job failed — final log
     */
    public function failed(\Throwable $exception)
    {
        Log::critical("[{$this->batchId}] Job permanently failed", [
            'lamps' => count($this->updates),
            'error' => $exception->getMessage(),
        ]);
    }
}