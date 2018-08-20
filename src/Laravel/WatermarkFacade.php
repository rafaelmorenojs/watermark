<?php

namespace rafaelmorenojs\watermark\Laravel;

use Illuminate\Support\Facades\Facade;

class WatermarkFacade extends Facade
{
    
    protected static function getFacadeAccessor()
    {
        return 'watermark';
    }
    
}