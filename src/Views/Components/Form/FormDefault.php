<?php

namespace QRFeedz\Frontend\Views\Components\Form;

use Illuminate\View\Component;

class FormDefault extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('qrfeedz::components.pages.form.default');
    }
}
