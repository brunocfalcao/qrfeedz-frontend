<?php

namespace QRFeedz\Frontend\Views\Components\Html;

use Illuminate\View\Component;

class Body extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.html.body');
    }
}
