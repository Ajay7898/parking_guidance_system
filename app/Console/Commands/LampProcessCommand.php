<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\YourController; 
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\API\TuyaBluetoothLampController;

class LampProcessCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lamp:process';

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
            $controller = app(TuyaBluetoothLampController::class);
            $controller->optimizeTuyaLampColorChange();
        } 
        catch (\Exception $e) 
        {
            Log::error('Lamp command failed: ' . $e->getMessage());
        }
    }
}
