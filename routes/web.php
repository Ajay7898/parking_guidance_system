<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{WebLinkLedController,DashboardController,AnalyticsController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () 
{
    return view('welcome');
});

// Dashboard routes
Route::get('/camera-status', [DashboardController::class, 'checkCameraStatus']);

Route::get('/slots-occupancy-dashboard', [AnalyticsController::class, 'dashboard']);

// Route::get('/analytics-dashboard', [AnalyticsController::class, 'dashboard']);
Route::get('/heatmap-data',[AnalyticsController::class, 'heatmapData']);

Route::get('/check-camera-status', [DashboardController::class, 'cameraStatusCheck'])->name('check.camera.status');


// Route::get('/B1_display', [WebLinkLedController::class, 'B1_display'])->name('B1_display');    
// Route::get('/parking-data', [WebLinkLedController::class, 'getParkingData']);