<?php

namespace QRFeedz\Frontend\Middleware;

use Brunocfalcao\Cerebrus\Cerebrus;
use Closure;
use Illuminate\Http\Request;

class ValidateSessionUuid
{
    public function handle(Request $request, Closure $next)
    {
        $session = new Cerebrus();

        return ($session->has('uuid')) ?
            $next($request) :
            abort('403', 'Looks like your survey expired, please try again');
    }
}
