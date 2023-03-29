<?php

namespace QRFeedz\Frontend\Facades;

use Illuminate\Support\Facades\Facade;

class CerebrusFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'frontend-cerebrus';
    }
}
