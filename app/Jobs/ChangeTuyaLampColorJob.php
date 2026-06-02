<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable; 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\TuyaApiService;

class ChangeTuyaLampColorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $device;
    public $color;

    public function __construct($device, $color)
    {
        $this->device = $device;
        $this->color = $color;
    }

    public function handle()
    {
        try 
        {
            if (!$this->device) 
            {
                return;
            }

            $tuya = new TuyaApiService();

            $startTime = microtime(true);

            if ($this->color == 'red') 
            {
                $value = '{"h":0,"s":1000,"v":1000}';
            } 
            else 
            {
                $value = '{"h":120,"s":1000,"v":1000}';
            }

            $response = $tuya->setDeviceInteraction(
                'colour_data_v2',
                $value,
                $this->device->lamp_device_id
            );

            $executionTime = microtime(true) - $startTime;

            if ($response['success'] ?? false) 
            {
                $this->device->update([
                    'color_status' => $response['msg'] ?? 'online',
                    'current_color' => $this->color
                ]);
            } 
            else 
            {
                $this->device->update([
                    'color_status' => $response['msg'] ?? 'No response'
                ]);
            }

        } 
        catch (\Throwable $e) 
        {
            if ($this->device) 
            {
                $this->device->update([
                    'color_status' =>  $e->getMessage(),
                ]);
            }

            \Log::error('Job Failed', [
                'error' => $e->getMessage()
            ]);
        }
    }
}