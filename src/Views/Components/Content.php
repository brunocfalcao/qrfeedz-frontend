<?php

namespace QRFeedz\Frontend\Views\Components;

use Illuminate\View\Component;

class Content extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.layout.content');
    }
}
