<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Brunocfalcao\Cerebrus\Cerebrus;
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
            // Throttle to 15 web calls per minute.
            $this->middleware('throttle:15,1')->only('render');
        }
    }

    /**
     * The instance is triggered when a new questionnaire is requested.
     * From the qr code id, we can fetch all the information needed to
     * render the questionnaire, and all the logic attached to it.
     *
     * @return mixed
     */
    public function render(Questionnaire $questionnaire)
    {
        (new Cerebrus())->set('questionnaire', $questionnaire);

        return view('qrfeedz::framework');
    }

    /**
     * Just a quick test, that finds the first questionnaire and renders it.
     *
     * @param  Questionnaire  $questionnaire
     * @return mixed
     */
    public function first()
    {
        $questionnaire = Questionnaire::all()->first();
        (new Cerebrus())->set('questionnaire', $questionnaire);

        return view('qrfeedz::framework');
    }
}
