<?php

namespace vaporic\Zoom\Facades;

use Illuminate\Support\Facades\Facade;

class Zoom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zoom';
    }
}
