<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\TuyaApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateTuyaLampColorsBatchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $updates;
    public $tries = 3;          // retry up to 3 times on failure
    public $backoff = [5, 30, 60]; // seconds between retries

    public function __construct($updates)
    {
        $this->updates = $updates;
    }

    public function handle()
    {
        try {
            Log::info('Sending batch to FastAPI', [
                'count' => count($this->updates),
            ]);

            $response = Http::timeout(30) // increased — 100 parallel calls need time
                ->post('http://192.168.10.5:8000/batch-update', $this->updates);

            Log::info('FastAPI response', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

            if ($response->successful()) {
                // FIX 3: only update DB for lamps FastAPI confirmed as successful

                $body = $response->json();



                $succeededIds = collect($body['results'] ?? [])

                    ->where('success', true)

                    ->pluck('tuya_id')

                    ->toArray();



                $failedCount = count($this->updates) - count($succeededIds);

                if ($failedCount > 0) {

                    Log::warning('Some lamps failed', ['failed_count' => $failedCount]);

                }


                foreach ($this->updates as $item) {

                    if (!in_array($item['tuya_id'], $succeededIds)) continue;


                    DB::table('tuya_lamps')

                        ->where('id', $item['id'])

                        ->update([

                            'current_color' => $item['color'],

                            'updated_at'    => now(),

                        ]);

                }

            } else {
                Log::error('FastAPI failed', ['response' => $response->body()]);
                $this->release(30); // re-queue after 30s
            }

        } catch (\Exception $e) {
            Log::error('FastAPI exception: ' . $e->getMessage());
            throw $e; // let Laravel retry handle it via $tries
        }
    }
}
