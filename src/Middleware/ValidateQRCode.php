<?php

namespace QRFeedz\Frontend\Middleware;

use Closure;
use Illuminate\Http\Request;
use QRFeedz\Cube\Models\Questionnaire;

class ValidateQRCode
{
    public function handle(Request $request, Closure $next)
    {
        $uuid = $request->route('uuid');

        $questionnaire = Questionnaire::firstWhere('uuid', $uuid);
        if (! $questionnaire) {
            abort(403, 'QR Code unknown, you might wanna check that');
        }

        if (! $questionnaire->isValid()) {
            abort('403', 'QR Code invalid, you might wanna check that');
        }

        return $next($request);
    }
}
