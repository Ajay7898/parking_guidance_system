<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\API\DisplayController;
use Illuminate\Support\Facades\Log;

class FetchBialData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bial:fetch-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        try 
        {
            $controller = app(DisplayController::class);
            $controller->sendVehicleDataToApi();
        } 
        catch (\Exception $e) 
        {
            Log::error('Lamp command failed: ' . $e->getMessage());
        }
    }
}
