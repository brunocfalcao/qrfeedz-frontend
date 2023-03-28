<?php

namespace QRFeedz\Frontend\Views\Components\Welcome;

use Illuminate\View\Component;

class WelcomeSelect extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.pages.welcome.select');
    }
}
