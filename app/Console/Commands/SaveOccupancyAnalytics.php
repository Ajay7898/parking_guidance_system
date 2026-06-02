<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SaveOccupancyAnalytics extends Command
{
    protected $signature = 'analytics:save-occupancy';

    protected $description = 'Save occupancy analytics';

    public function handle()
    {
        $data = DB::table('parking_slots')
        ->selectRaw('parking_location,COUNT(CASE WHEN status != 3 THEN 1 END) as total_slots,COUNT(CASE WHEN status = 1 THEN 1 END) as occupied_slots')
        ->groupBy('parking_location')
        ->get();

        foreach ($data as $row)
        {
            DB::table('occupancy_logs')->insert([
                'parking_location' => $row->parking_location,
                'total_slots' => $row->total_slots,
                'occupied_slots' => $row->occupied_slots,
                'free_slots' =>
                    $row->total_slots - $row->occupied_slots,
                'occupancy_percentage' =>
                    round(
                        ($row->occupied_slots / max($row->total_slots,1)) * 100,
                        2
                    ),

                'created_at' => now()
            ]);
        }

        $this->info('Occupancy analytics saved');
    }
}