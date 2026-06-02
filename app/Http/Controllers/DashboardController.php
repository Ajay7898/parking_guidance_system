<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function checkCameraStatus()
    {
        $cameras = DB::table('cameras')->get();

        foreach ($cameras as $camera)
        {
            $ip = $camera->ip_address;
            $port = 554;

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

                echo "$ip ONLINE <br>";
            }
            else
            {
                DB::table('cameras')
                    ->where('id', $camera->id)
                    ->update([
                        'status' => 'offline',
                        'updated_at' => now()
                    ]);

                echo "$ip OFFLINE <br>";
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Camera status checked successfully'
        ]);
    }

    public function cameraStatusCheck()
    {
        // $cameras = DB::table('cameras')
        //     ->when(request('search'), function ($query) {
        //         $query->where('name', 'like', '%' . request('search') . '%')
        //             ->orWhere('ip_address', 'like', '%' . request('search') . '%');
        //     })
        //     ->paginate(25)
        //     ->withQueryString();

        $cameras = DB::table('cameras')->where('camera_ftp_name','!=',null)->orderBy('id')->paginate(25);
        return view('check_camera_status',compact('cameras'));
    }
}