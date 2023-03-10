<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use QRFeedz\Cube\Models\Questionnaire;

class InstanceController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        if (! App::environment(['local', 'staging'])) {
            $this->middleware('throttle:15,1')->only('new');
        }
    }

    /**
     * The instance is triggered when a new questionnaire is requested.
     * From the qr code id, we can fetch all the information needed to
     * render the questionnaire, and all the logic attached to it.
     *
     * @param  string  $uuid The qrcode id
     * @return mixed
     */
    public function new(Questionnaire $questionnaire)
    {
        return view('qrfeedz::instance', [
            'questionnaire' => $questionnaire,
        ]);
    }
}
