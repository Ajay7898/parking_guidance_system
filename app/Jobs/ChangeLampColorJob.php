<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable; 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\{TuyaApiService,MultiAccountTuyaApiService};

class ChangeLampColorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $device;

    public function __construct($device)
    {
        $this->device = $device;
    }

    public function handle()
    {
        if (!$this->device->tuyaAccount) 
        {
            $this->device->update([
                'color_status' => 'failed',
                'color_message' => 'Tuya account not found',
            ]);
            return;
        }

        try 
        {
            $multiTuya = new MultiAccountTuyaApiService(
                $this->device->tuyaAccount->client_id,
                $this->device->tuyaAccount->secret,
                $this->device->tuyaAccount->api_url
            );

            $response = $multiTuya->setDeviceInteraction(
                'colour_data_v2',
                //'{"h":240,"s":1000,"v":1000}',//blue
                //'{"h": 0, "s": 1000, "v": 1000}',//red
                '{"h": 120, "s": 1000, "v": 1000}',//green
                $this->device->lamp_device_id
            );

            if ($response['success'] ?? false) 
            {
                $this->device->update([
                    'color_status' => 'success',
                    'color_message' => 'Color changed',
                    'color_updated_at' => now(),
                ]);
            } 
            else 
            {
                $this->device->update([
                    'color_status' => 'failed',
                    'color_message' => $response['msg'] ?? 'No response',
                ]);
            }
        } 
        catch (\Throwable $e) 
        {
            $this->device->update([
                'color_status' => 'failed',
                'color_message' => $e->getMessage(),
            ]);
        }
    }


    // public function handle()
    // {
    //     if(!$this->device->tuyaAccount) 
    //     {
    //         $this->device->update([
    //             'color_status' => 'failed',
    //             'color_message' => 'Tuya account not found',
    //         ]);
    //         return;
    //     }

    //     $multiTuya = new MultiAccountTuyaApiService(
    //         $this->device->tuyaAccount->client_id,
    //         $this->device->tuyaAccount->secret,
    //         $this->device->tuyaAccount->api_url
    //     );

    //     $code = 'colour_data_v2';
    //     $value = '{"h": 120, "s": 1000, "v": 1000}'; // green
    //     //$value = '{"h":0,"s":1000,"v":1000}'; // red
    //     // $value = '{"h":240,"s":1000,"v":1000}'; // Blue


    //     $multiTuya->setDeviceInteraction(
    //         $code,
    //         $value,
    //         $this->device->lamp_device_id
    //     );
    // }
}

