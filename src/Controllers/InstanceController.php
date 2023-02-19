<?php

namespace QRFeedz\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstanceController extends Controller
{
    public function new(string $uuid)
    {
        return view('qrfeedz::instance');
    }
}
