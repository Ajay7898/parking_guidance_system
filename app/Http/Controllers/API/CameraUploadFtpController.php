<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\{ParkingSlot}; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DB;

class CameraUploadFtpController extends Controller
{
    public function updateParkingSlots(Request $request)
    {
        // Get JSON array from body
        $data = $request->json()->all();

        if (empty($data) || !is_array($data)) 
        {
            return response()->json([
                'status' => false,
                'message' => 'Invalid or empty JSON data'
            ], 422);
        }

        $this->updateParkingSlotsDb($data);

        return response()->json([
            'status'  => true,
            'message' => 'Parking slots updated successfully'
        ], 200);
    }

    private function updateParkingSlotsDb(array $data)
    {
        try 
        {
            if (empty($data) || !is_array($data)) 
            {
                Log::error("Invalid JSON data passed to updateParkingSlots");
                return;
            }
    
            $casesStatus = "";
            $casesVehicle = "";
            $casesImage = "";
            $casesChangeSlot = "";
            $ids = [];
    
            foreach ($data as $slot) 
            {
                $id = (int) ($slot['slot_number'] ?? 0);
                $status = (int) ($slot['status'] ?? 0); 
    
                if (!$id) continue;
    
                $casesStatus .= "WHEN {$id} THEN {$status} ";
                $casesChangeSlot .= "WHEN {$id} THEN '" . now() . "' ";
    
                $ids[] = $id;
            }
    
            if (count($ids) === 0) 
            {
                Log::warning("No valid slot IDs found");
                return;
            }
    
            $idList = implode(',', $ids);
    
            DB::statement("
                UPDATE parking_slots
                SET
                    status = CASE id {$casesStatus} END,
                    change_slot_time = CASE id {$casesChangeSlot} END
                WHERE id IN ({$idList})
            ");
    
        } 
        catch (\Exception $e) 
        {
            Log::error("updateParkingSlots failed: " . $e->getMessage());
        } 
        finally 
        {
            ParkingSlot::where('id', 1)->update(['is_checked' => 0]);
        }
    }

    // Vehicle search kiosk api for filewatcher
    public function updateParkingSlotsVSK(Request $request)
    {
        $payload = $request->json()->all();

        if(
            empty($payload) ||
            !isset($payload['results']) ||
            !is_array($payload['results'])
        ) 
        {
            return response()->json([
                'status' => false,
                'message' => 'Invalid JSON structure'
            ], 422);
        }

        $this->updateParkingSlotsDbVSK($payload['results']);

        return response()->json([
            'status'  => true,
            'message' => 'Parking slots updated successfully'
        ], 200);
    }

    private function updateParkingSlotsDbVSK(array $slots)
    {
        try 
        {
            $casesVehicle = "";
            $ids = [];
            $usedIds = [];

            foreach ($slots as $slot) 
            {
                $id = (int) ($slot['filename'] ?? 0);
                if (!$id || isset($usedIds[$id])) 
                {
                    continue;
                }

                $usedIds[$id] = true;

                $vehicleNumberRaw = is_string($slot['number'] ?? null)
                    ? $slot['number']
                    : null;

                // Clean number
                $plateNumber = $vehicleNumberRaw
                    ? preg_replace("/[^A-Za-z0-9]/", "", $vehicleNumberRaw)
                    : null;

                if ($plateNumber && in_array(strtoupper($plateNumber[0]), ['E', 'F'])) 
                {
                    $plateNumber = substr($plateNumber, 1);
                }

                $plateNumber = $plateNumber
                    ? str_replace("'", "''", $plateNumber)
                    : null;

                $casesVehicle .= "WHEN {$id} THEN " .
                    ($plateNumber ? "'{$plateNumber}'" : "NULL") . " ";

                $ids[] = $id;
            }

            if (empty($ids)) 
            {
                Log::warning("No valid parking slot IDs found");
                return;
            }

            $idList = implode(',', $ids);

            DB::statement("
                UPDATE parking_slots
                SET vehicle_number_plate = CASE id
                    {$casesVehicle}
                END
                WHERE id IN ({$idList})
            ");

        }
        catch (\Exception $e) 
        {
            Log::error("updateParkingSlotsDbVSK failed: " . $e->getMessage());
        }
        finally 
        {
            ParkingSlot::where('id', 1)->update(['is_checked' => 0]);
        }
    }



}