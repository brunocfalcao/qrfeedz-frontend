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
        $this->middleware('validate-session-uuid')->only('render');
    }

    /**
     * The first url that is called when a visitor scans a qrcode.
     * This url just operates a redirection. The redirection always happens
     * and the new target url. This just happens for throttling reasons and
     * to generate a unique ID that is session persisted. This unique ID will
     * have a timespan of 1 hour. Then it will expire and the visitor will not
     * be able to continue, or start, the questionnaire.
     *
     * This method is validated by the middleware validate-qrcode so if this
     * runs it's because the uuid belongs to a valid questionnaire.
     */
    public function go(Request $request, string $uuid)
    {
        $session = new Cerebrus();

        /**
         * Set the questionnaire uuid into session for later middleware
         * 'validate-session-uuid' validation. It will be active for
         * 60 minutes.
         */
        $session->set(
            'uuid',
            $uuid,
            // In non-production is 4 hours for testing reasons.
            app()->environment() == 'production' ? 3600 : 3600 * 4
        );

        /**
         * Obtain questionnaire. The middleware already ensured that the
         * questionnaire is valid and active.
         */
        $questionnaire = Questionnaire::firstWhere('uuid', $uuid);

        /**
         * Put the questionnaire into session. The questionnaire is passed
         * to the questionnaire view data, but if necessary it can also
         * be accessed by the session key.
         */
        $session = new Cerebrus();
        $session->set(
            'questionnaire',
            $questionnaire,
            // In non-production is 4 hours for testing reasons.
            app()->environment() == 'production' ? 3600 : 3600 * 4
        );

        /**
         * Redirect to the render questionnare url. The middleware
         * 'validate-session-uuid' will be triggered.
         */
        return redirect(route('qrcode.render'));
    }

    public function render(Request $request)
    {
        return view('qrfeedz-frontend::questionnaire')
                ->with('questionnaire', Questionnaire::fromSession());
    }

    public function updateData(Request $request, string $data)
    {
    }
}
