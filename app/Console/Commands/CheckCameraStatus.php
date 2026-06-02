<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckCameraStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'camera:check-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cameras = DB::table('cameras')->get();

        foreach ($cameras as $camera)
        {
            $ip = $camera->ip_address;

            // RTSP default port
            $port = 554;

            // Check RTSP socket connection
            $connection = @fsockopen($ip, $port, $errno, $errstr, 2);

            if (is_resource($connection))
            {
                fclose($connection);

                DB::table('cameras')
                    ->where('id', $camera->id)
                    ->update([
                        'status' => 'online',
                        'updated_at' => now()
                    ]);
            }
            else
            {
                DB::table('cameras')
                    ->where('id', $camera->id)
                    ->update([
                        'status' => 'offline',
                        'updated_at' => now()
                    ]);
            }
        }
    }
}
