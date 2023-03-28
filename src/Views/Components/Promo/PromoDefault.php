<?php

namespace QRFeedz\Frontend\Views\Components\Promo;

use Illuminate\View\Component;

class PromoDefault extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.pages.promo.default');
    }
}
