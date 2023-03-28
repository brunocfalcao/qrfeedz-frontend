<?php

namespace QRFeedz\Frontend\Views\Components\Html;

use Illuminate\View\Component;

class Head extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('qrfeedz::components.html.head');
    }
}
