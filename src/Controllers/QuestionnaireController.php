<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use QRFeedz\Cube\Models\Questionnaire;

class QuestionnaireController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        if (App::environment(['production'])) {
            // Throttle to 15 web calls per minute in production.
            $this->middleware('throttle:15,1')->only('render');
        }
    }

    /**
     * The instance is triggered when a new questionnaire is requested.
     * From the qr code id, we can fetch all the information needed to
     * render the questionnaire, and all the logic attached to it.
     *
     * @return Support\View
     */
    public function render(Request $request, Questionnaire $questionnaire)
    {
        (new Cerebrus())->set('questionnaire', $questionnaire);

        $request->has('lang') ?
            (new Cerebrus())->set('lang', $request->query('lang')) :
            (new Cerebrus())->unset('lang');

        return view('qrfeedz::questionnaire')
            ->with('questionnaire', $questionnaire);
    }
}
