<?php

namespace QRFeedz\Frontend\Middleware;

use Brunocfalcao\Cerebrus\Cerebrus;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use QRFeedz\Cube\Models\Locale;

class PersistLocale
{
    /**
     * Handle an incoming request.
     *
     * 1. Determine the desired locale from the request query parameter "lang", the Cerebrus session variable "lang",
     *    or the application's default locale, in that order of precedence.
     * 2. Validate the desired locale against the canonical values stored in the Locale model.
     *    If the validation fails, abort the request with a 400 Bad Request status code.
     * 3. Set the application's locale to the validated locale.
     * 4. Record the validated locale in the Cerebrus session.
     * 5. Proceed with handling the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cerebrus = new Cerebrus();
        $lang = $request->query('lang') ?? $cerebrus->get('lang') ?? App::getLocale();

        // Get possible canonical values from the Locale model
        $canonicalValues = Locale::pluck('canonical')->toArray();

        // Validate the lang parameter
        $validator = Validator::make(['lang' => $lang], [
            'lang' => 'required|in:'.implode(',', $canonicalValues),
        ]);

        if ($validator->fails()) {
            abort(400, 'Bad Request');
        }

        App::setLocale($lang);
        $cerebrus->set('lang', $lang);

        return $next($request);
    }
}
