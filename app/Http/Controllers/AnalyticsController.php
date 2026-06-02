<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AnalyticsController extends Controller
{
    public function dashboard()
    {
        $location = request('location');
        $date = request('date', now()->toDateString());

        $todayOccupancy = DB::table('occupancy_logs')
            ->whereDate('created_at', today())
            ->avg('occupancy_percentage');
     
        $dailyGraph = DB::table('occupancy_logs')
            ->selectRaw('
                DATE(created_at) as day,
                ROUND(AVG(occupied_slots),0) as vehicle_count
            ')
            ->when($location, function ($query) use ($location) 
            {
                $query->where('parking_location', $location);
            })
            ->groupBy('day')
            ->orderBy('day')
            ->limit(31)
            ->get();

        $monthlyGraph = DB::table('occupancy_logs')
            ->selectRaw("
                DATE_FORMAT(created_at,'%Y-%m') as month,
                ROUND(AVG(occupied_slots),0) as vehicle_count
            ")
            ->when($location, function ($query) use ($location) 
            {
                $query->where('parking_location', $location);
            })
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $peakHour = DB::table('occupancy_logs')
            ->selectRaw('
                HOUR(created_at) as hour,
                ROUND(AVG(occupied_slots),0) as vehicle_count
            ')
            ->whereDate('created_at', $date)
            ->when($location, function ($query) use ($location) 
            {
                $query->where('parking_location', $location);
            })
            ->groupBy('hour')
            ->orderBy('hour')
            ->get();

        $heatmap = $this->getHeatmapData();

        return view('dashboard', compact(
            'todayOccupancy',
            'dailyGraph',
            'monthlyGraph',
            'peakHour',
            'date',
            'heatmap'
        ));
    }

    public function heatmapData()
    {
        return response()->json(
            $this->getHeatmapData()
        );
    }

    private function getHeatmapData()
    {
        return DB::table('parking_heatmap')->get(); 
    }
}