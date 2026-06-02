<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{ParkingSlot}; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DB;

class DisplayController extends Controller
{
    // Vehicle Search Kiosk for b1 and b2
    public function pgsSearchKiosk($license_plate)
    {
        $parking_slots = ParkingSlot::select(
                'parking_blocks.parking_area as parking_area',
                'parking_blocks.pillar_name',
                'parking_slots.slot_number',
                'parking_slots.vehicle_number_plate',
                'parking_slots.vehicle_image'
            )
            ->join('parking_blocks', 'parking_slots.block_id', '=', 'parking_blocks.id')
            ->where('parking_slots.vehicle_number_plate', 'LIKE', '%' . $license_plate)
            ->where('parking_slots.parking_location','!=','T1-P4')
            ->get();

        return response()->json([
            'status' => true,
            'all_vehicle_data' => $parking_slots,
        ]);
    }

    // Vehicle Search Kiosk for p4
    public function pgsSearchKioskP4($license_plate)
    {
        $parking_slots = ParkingSlot::select(
                'parking_blocks.parking_area as parking_area',
                'parking_blocks.pillar_name',
                'parking_slots.slot_number',
                'parking_slots.vehicle_number_plate',
                'parking_slots.vehicle_image'
            )
            ->join('parking_blocks', 'parking_slots.block_id', '=', 'parking_blocks.id')
            ->where('parking_slots.vehicle_number_plate', 'LIKE', '%' . $license_plate)
            ->where('parking_slots.parking_location','T1-P4')
            ->get();

        return response()->json([
            'status' => true,
            'all_vehicle_data' => $parking_slots,
        ]);
    }

    public function occupiedSlotsDataB1()
    {
        $parkingLocation = 'Basement -1';

        $stats = DB::table('parking_slots')
            ->selectRaw('
                COUNT(CASE WHEN status != 3 THEN 1 END) as total_slots,
                COUNT(CASE WHEN status = 1 THEN 1 END) as occupied_slots
            ')
            ->where('parking_location', $parkingLocation)
            ->first();

        $b1_data = DB::table('parking_slots')
            ->select('id', 'slot_number')
            ->where('parking_location', $parkingLocation)
            ->where('status', 1)
            ->get();

        return response()->json([
            'status' => true,
            'total_slots' => $stats->total_slots,
            'occupied_slots' => $stats->occupied_slots,
            'available_slots' =>$stats->total_slots - $stats->occupied_slots,
            'data' => $b1_data,
        ]);
    }

    public function occupiedSlotsDataB2()
    {
        $parkingLocation = 'Basement -2';

        $stats = DB::table('parking_slots')
            ->selectRaw('
                COUNT(CASE WHEN status != 3 THEN 1 END) as total_slots,
                COUNT(CASE WHEN status = 1 THEN 1 END) as occupied_slots
            ')
            ->where('parking_location', $parkingLocation)
            ->first();

        $b2_data = DB::table('parking_slots')
            ->select('id', 'slot_number')
            ->where('parking_location', $parkingLocation)
            ->where('status', 1)
            ->get();

        return response()->json([
            'status' => true,
            'total_slots' => $stats->total_slots,
            'occupied_slots' => $stats->occupied_slots,
            'available_slots' =>$stats->total_slots - $stats->occupied_slots,
            'data' => $b2_data,
        ]);
    }

    // Display count b1
    public function allDisplayCountB1()
    {
        $result = DB::table('parking_slots as ps')
            ->join('display_slot_map as dsm', 'ps.id', '=', 'dsm.slot_id')
            ->join('displays as d', 'd.id', '=', 'dsm.display_id')
            ->where('ps.status', 0)
            ->where('ps.parking_location', 'Basement -1')
            ->groupBy('d.direction_way')
            ->select('d.direction_way', DB::raw('COUNT(ps.id) as available'))
            ->pluck('available', 'direction_way');

        return response()->json($result);
    }

    // Display count b2
    public function allDisplayCountB2()
    {
        $result = DB::table('parking_slots as ps')
            ->join('display_slot_map as dsm', 'ps.id', '=', 'dsm.slot_id')
            ->join('displays as d', 'd.id', '=', 'dsm.display_id')
            ->where('ps.status', 0)
            ->where('ps.parking_location', 'Basement -2')
            ->groupBy('d.direction_way')
            ->select('d.direction_way', DB::raw('COUNT(ps.id) as available'))
            ->pluck('available', 'direction_way');

        return response()->json($result);
    }

    // Display count p4
    public function allDisplayCountP4()
    {
        $result = DB::table('parking_slots as ps')
            ->join('display_slot_map as dsm', 'ps.id', '=', 'dsm.slot_id')
            ->join('displays as d', 'd.id', '=', 'dsm.display_id')
            ->where('ps.status', 0)
            ->where('ps.parking_location', 'T1-P4')
            ->groupBy('d.direction_way')
            ->select('d.direction_way', DB::raw('COUNT(ps.id) as available'))
            ->pluck('available', 'direction_way');

        return response()->json($result);
    }

    // Total Count b1
    public function totalDisplayCountB1()
    {
        $count = DB::table('parking_slots')
            ->where('status', 0)
            ->where('parking_location', 'Basement -1')
            ->count();

        return response()->json([
            'total_empty_slots-b1' => $count
        ]);
    }

    // Total Count b2
    public function totalDisplayCountB2()
    {
        $count = DB::table('parking_slots')
            ->where('status', 0)
            ->where('parking_location', 'Basement -2')
            ->count();

        return response()->json([
            'total_empty_slots-b2' => $count
        ]);
    }

    // Total Count p4
    public function totalDisplayCountP4()
    {
        $count = DB::table('parking_slots')
            ->where('status', 0)
            ->where('parking_location', 'T1-P4')
            ->count();

        return response()->json([
            'total_empty_slots-p4' => $count
        ]);
    }

    // bial data get and save in simbil server
    public function sendVehicleDataToApi()
    {
        $parking_slots = ParkingSlot::select(
                'parking_blocks.parking_area',
                'parking_blocks.lot_name',
                'parking_blocks.pillar_name',
                'parking_slots.slot_number',
                'parking_slots.vehicle_number_plate',
            )
            ->where('parking_slots.status', 1)
            ->join('parking_blocks', 'parking_slots.block_id', '=', 'parking_blocks.id')
            ->get();

        $data = [ 'all_vehicle_data' => $parking_slots->toArray() ];

        $response = Http::post(
            'https://parkin.pro/api/v4/vehicle-info-pgs/bial-vehicle-data-save',
            $data
        );

        if ($response->successful()) 
        {
            return response()->json([
                'message' => 'Data sent successfully',
                'count' => $parking_slots->count()
            ]);
        }

        return response()->json([
            'message' => 'API failed',
            'error' => $response->body()
        ]);
    }
}