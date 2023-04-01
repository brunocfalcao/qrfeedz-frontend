<?php

namespace QRFeedz\Frontend\Views\Components\Support;

use Illuminate\View\Component;

class ResponsiveBrackets extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.support.responsive-brackets');
    }
}
