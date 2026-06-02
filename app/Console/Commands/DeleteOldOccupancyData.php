<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteOldOccupancyData extends Command
{
    protected $signature = 'occupancy:cleanup';

    protected $description = 'Delete last month occupancy data';

    public function handle()
    {
        // $startOfMonth = Carbon::now()->startOfMonth();
        $keepFromDate = Carbon::now()->startOfMonth()->subMonths(2);
        $deleted = DB::table('occupancy_logs')
            ->where('created_at', '<', $keepFromDate)
            ->delete();

        $this->info("Deleted {$deleted} old records.");
    }
}