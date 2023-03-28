<?php

namespace QRFeedz\Frontend\Facades;

use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\Support\Facades\Facade;

class CerebrusFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'frontend-cerebrus';
    }
}
