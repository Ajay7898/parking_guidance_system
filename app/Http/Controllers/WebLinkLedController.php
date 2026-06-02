<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WebLinkLedController extends Controller
{
    public function B1_display()
    {
        return view('led.B1_display');
    }

    public function getParkingData()
    {
        $data = DB::table('parking_blocks as pb')
            ->leftJoin('parking_slots as ps', 'pb.id', '=', 'ps.block_id')
            ->select(
                'pb.id as block_id',
                'pb.pillar_name as block_name',
                'ps.id as slot_id',
                'ps.slot_number',
                'ps.status'               
            )
            ->orderBy('pb.id')
            ->where('pb.lot_name','Basement 1')
            ->where('ps.parking_location','Basement -1')
            ->where('pb.parking_area','Terminal-2')
            ->get();

            $summary = DB::table('parking_blocks as pb')
                ->leftJoin('parking_slots as ps', 'pb.id', '=', 'ps.block_id')
                ->where('pb.lot_name','Basement 1')
                ->where('ps.parking_location','Basement -1')
                ->where('pb.parking_area','Terminal-2')
                ->selectRaw('
                    COUNT(ps.id) as total_slots,
                    SUM(CASE WHEN ps.status = 0 THEN 1 ELSE 0 END) as available_slots,
                    SUM(CASE WHEN ps.status = 1 THEN 1 ELSE 0 END) as booked_slots
                ')
                ->first();

     
        return response()->json([
            'data' => $data,
            'summary' => $summary
        ]);
    }
}


