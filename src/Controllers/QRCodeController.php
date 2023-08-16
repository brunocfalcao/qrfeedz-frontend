<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use QRFeedz\Cube\Models\Questionnaire;

class QRCodeController extends Controller
{
    public function __construct()
    {
        if (App::environment(['production'])) {
            // Throttle to 15 web calls per minute in production.
            $this->middleware('throttle:20,1');
        }

        // Persist or change the locale in case it is passed on.
        $this->middleware('persist-locale')->except('go');

        // Validate the qrcode, if it's active and exists.
        $this->middleware('validate-qrcode')->only('go');

        // Validate if the session uuid exists.
        $this->middleware('validate-session-uuid')->only('renderPageInstance');
    }

    /**
     * The first url that is called when a visitor scans a qrcode.
     * This url just operates a redirection. The redirection always happens
     * and the new target url. This just happens for throttling reasons and
     * to generate a unique ID that is session persisted. This unique ID will
     * have a timespan of 1 hour. Then it will expire and the visitor will not
     * be able to continue, or start, the questionnaire.
     */
    public function go(Request $request, string $uuid)
    {
        $session = new Cerebrus();

        $session->set('uuid', $uuid, 3600);

        /**
         * Obtain the first page instance uuid to be rendered. The questionnaire
         * existance validation is already made by the middleware validate-qrcode.
         */
        $questionnaire = Questionnaire::firstWhere('uuid', $uuid);

        $firstPageInstance = $questionnaire->pageInstances()
                                           ->orderBy('index')
                                           ->first();

        return redirect(route('qrcode.render-page-instance', ['uuid' => $firstPageInstance->uuid]));
    }

    public function renderPageInstance(Request $request, string $uuid)
    {
    }
}
