<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;
use App\Services\{TuyaApiService};
use App\Models\{TuyaLamp};
use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TuyaBluetoothLampController extends Controller
{
    public function optimizeTuyaLampColorChange()
    {
        try 
        {
            if (!Cache::add('lamp_lock', true, 5)) 
            {
                return response()->json(['message' => 'Already running']);
            }

            $lampStatuses = DB::table('parking_slots') 
                ->select(
                    'tuya_lamp_id',
                    DB::raw("CASE
                        WHEN COALESCE(SUM(status),0) = COUNT(*) THEN 'red'
                        ELSE 'green'
                    END as color")
                )
                ->whereNotNull('tuya_lamp_id')
                ->groupBy('tuya_lamp_id')
                ->get();

            $lampIds = $lampStatuses->pluck('tuya_lamp_id')->unique();

            $lamps = TuyaLamp::whereIn('id', $lampIds)
                ->select('id', 'lamp_device_id', 'current_color')
                ->get()
                ->keyBy('id');

            $cacheKeys = [];
            foreach ($lampStatuses as $item) 
            {
                $cacheKeys[$item->tuya_lamp_id] = "tuya_{$item->tuya_lamp_id}";
            }

            $cached = Cache::many($cacheKeys);

            $updates = [];

            foreach ($lampStatuses as $item) 
            {
                $lamp = $lamps[$item->tuya_lamp_id] ?? null;
                if (!$lamp) continue;

                $cacheKey = $cacheKeys[$item->tuya_lamp_id];

                if (($cached[$cacheKey] ?? null) === $item->color) continue;
                if ($lamp->current_color === $item->color) continue;

                $updates[] = [
                    'id'      => $lamp->id,
                    'tuya_id' => $lamp->lamp_device_id,
                    'color'   => $item->color
                ];
            }

            if (empty($updates)) 
            {
                return response()->json(['message' => 'No updates needed']);
            }

            $response = Http::timeout(10)
                ->retry(2, 100)
                ->post('http://192.168.10.5:8000/batch-update', $updates);

            if (!$response->successful()) 
            {
                Log::error('FastAPI failed', ['body' => $response->body()]);
                return;
            }

            $results = $response->json()['results'] ?? [];

            $updatedLamps = []; 

            foreach ($results as $res) 
            {
                if (!($res['success'] ?? false)) continue;

                $tuyaId = $res['tuya_id'] ?? null;
                $color  = $res['color'] ?? null;
                $lampId = $res['lamp_id'] ?? null;
                $color_status = $res['success'] ?? $res['error'];

                if (!$tuyaId || !$color) continue;

                DB::table('tuya_lamps')
                    ->where('lamp_device_id', $tuyaId)
                    ->update([
                        'current_color' => $color,
                        'color_status' => $color_status,
                        'updated_at' => now()
                    ]);

                if ($lampId) 
                {
                    Cache::put("tuya_" . $lampId, $color, now()->addMinutes(5));
                }

                $updatedLamps[] = [
                    'lamp_id'  => $lampId,
                    'tuya_id'  => $tuyaId,
                    'color'    => $color,
                    'status'   => 'updated'
                ];
            }

            return response()->json([
                'status' => true,
                'updated_count' => count($updatedLamps),
                'data' => $updatedLamps
            ]);

        } 
        catch (\Exception $e) 
        {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
}