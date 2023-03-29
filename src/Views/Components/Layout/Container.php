<?php

namespace QRFeedz\Frontend\Views\Components\Layout;

use Illuminate\View\Component;

class Container extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.layout.container');
    }
}
