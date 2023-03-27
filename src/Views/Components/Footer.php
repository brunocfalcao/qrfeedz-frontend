<?php

namespace QRFeedz\Frontend\Views\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.layout.footer');
    }
}
