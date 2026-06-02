<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('camera:check-status')->dailyAt('00:00');
        $schedule->command('app:delete-old-camera-folders')->dailyAt('01:00');
        
        $schedule->command('bial:fetch-data')->everyFiveMinutes();

        $schedule->command('analytics:save-occupancy')->everyFifteenMinutes();
        $schedule->command('occupancy:cleanup')->monthlyOn(3, '01:00');

        // Lamp command run every 5 seconds through the worker.
        // sudo supervisorctl restart laravel-worker:* laravel-lamp:*
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
