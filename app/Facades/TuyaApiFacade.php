<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\TuyaApiService;

class TuyaApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TuyaApiService::class;
    }
} 
