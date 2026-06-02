<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{AuthController,CameraUploadFtpController,DisplayController,TuyaBluetoothLampController};

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('pgs-vehicle-search/{license_plate}',[DisplayController::class,'pgsSearchKiosk']);
Route::get('pgs-vehicle-search-p4/{license_plate}',[DisplayController::class,'pgsSearchKioskP4']);

Route::middleware('auth:sanctum')->group(function () 
{
    Route::get('/user', function (Request $request) 
    {
        return $request->user();
    });

    Route::get('/profile', function (Request $request) 
    {
        return response()->json(['profile' => 'data']);
    });

    Route::get('kiosk-vehicle-search', function () 
    {
        return response()->json(['dashboard' => 'data']);
    });

});

// Display Count api b1, b2 and p4

Route::get('b1-display-count',[DisplayController::class,'allDisplayCountB1'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('b2-display-count',[DisplayController::class,'allDisplayCountB2'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('p4-display-count',[DisplayController::class,'allDisplayCountP4'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('b1-total-display-count',[DisplayController::class,'totalDisplayCountB1'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('b2-total-display-count',[DisplayController::class,'totalDisplayCountB2'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('p4-total-display-count',[DisplayController::class,'totalDisplayCountP4'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

// Tuya Lamp api
Route::get('prod-bluetooth-lamp',[TuyaBluetoothLampController::class,'optimizeTuyaLampColorChange'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::post('update-parking-slots',[CameraUploadFtpController::class,'updateParkingSlots'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::post('update-parking-vsk', [CameraUploadFtpController::class,'updateParkingSlotsVSK'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

// Api Bial Data get for vehicle search kisok for gloabal
Route::get('bial-data-get',[DisplayController::class,'sendVehicleDataToApi'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('occupied-slots-b1',[DisplayController::class,'occupiedSlotsDataB1'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');

Route::get('occupied-slots-b2',[DisplayController::class,'occupiedSlotsDataB2'])
    ->middleware('throttle:vsk-cameras')
    ->withoutMiddleware('throttle:api');



