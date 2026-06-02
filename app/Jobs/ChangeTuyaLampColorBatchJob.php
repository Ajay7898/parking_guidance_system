<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable; 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\TuyaApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ChangeTuyaLampColorBatchJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    public $devices;

    public $tries = 3;
    public $backoff = [5, 15, 30];

    public function __construct($devices)
    {
        $this->devices = $devices;
    }

    public function handle()
    {
        $tuya = new TuyaApiService();

        foreach ($this->devices as $item)
        {
            try 
            {
                $value = $item['color'] === 'red'
                    ? '{"h":0,"s":1000,"v":1000}'
                    : '{"h":120,"s":1000,"v":1000}';

                $response = $tuya->setDeviceInteraction(
                    'colour_data_v2',
                    $value,
                    $item['device_id']
                );

                if ($response['success'] ?? false)
                {
                    DB::table('tuya_lamps')
                        ->where('id', $item['lamp_id'])
                        ->update([
                            'current_color' => $item['color'],
                            'color_status'  => 'online',
                            'updated_at'    => now()
                        ]);

                    // cache only after success
                    Cache::put($item['cache_key'], $item['color'], now()->addMinutes(5));
                }
                else
                {
                    Log::warning('Tuya API failed', [
                        'device_id' => $item['device_id'],
                        'response'  => $response
                    ]);
                }
            } 
            catch (\Exception $e) 
            {
                Log::error('Lamp update exception', [
                    'device_id' => $item['device_id'],
                    'error'     => $e->getMessage()
                ]);

                throw $e; // 👈 ensures retry
            }
        }
    }
}