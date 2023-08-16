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

        /**
         * For non-production environments we will accept a querystring key
         * called first. If it is present then we will return the first
         * active questionnaire in the database.
         */
        $questionnaire = Questionnaire::firstWhere('uuid', $uuid);
        if (!$questionnaire) {
            abort(403, 'QR Code unknown');
        }

        if (!$questionnaire->isValid()) {
            abort('403', 'QR Code invalid');
        }

        return $next($request);
    }
}
