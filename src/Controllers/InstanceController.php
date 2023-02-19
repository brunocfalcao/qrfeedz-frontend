<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;

class InstanceController extends Controller
{
    public function new(string $uuid)
    {
        return view('qrfeedz::instance');
    }
}
