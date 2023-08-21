<?php

namespace QRFeedz\Frontend\Middleware;

use Brunocfalcao\Cerebrus\Cerebrus;
use Closure;
use Illuminate\Http\Request;

class ValidateSessionUuid
{
    /**
     * This middleware verifies if the session "uuid" still exists. By default
     * this session has a lifetime of 3600 seconds (1 hours) so it means that
     * if the visitor "waits" one hour after scanning the qrcode it will
     * expire and show an error message. This will allow that, since there is
     * a redirect from the qrcode/go/{qrcode} to qrcode/render and the visitor
     * might not have a chance to bookmark the original qrcode.
     */
    public function handle(Request $request, Closure $next)
    {
        $session = new Cerebrus();

        return ($session->has('uuid')) ?
            $next($request) :
            abort('403', 'Looks like your questionnaire expired, please try again');
    }
}
