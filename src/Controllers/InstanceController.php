<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use QRFeedz\Cube\Models\Country;

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
     *
     * @param  string  $uuid The qrcode id
     * @return mixed
     */
    public function new(string $uuid)
    {
        return view('qrfeedz::instance');
    }
}
