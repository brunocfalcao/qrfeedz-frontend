<?php

namespace QRFeedz\Frontend\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckQuestionnaire
{
    public function handle(Request $request, Closure $next)
    {
        $questionnaire = $request->route('questionnaire');

        return ! $questionnaire->isValid() ?
            $next($request) :
            response()->view('qrfeedz::exceptions.questionnaire-invalid');
    }
}
