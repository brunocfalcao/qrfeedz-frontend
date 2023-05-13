<?php

namespace QRFeedz\Frontend\Views\Components\Elements;

use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\View\Component;

class Body extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.elements.body');
    }
}
