<?php

namespace QRFeedz\Frontend\Views\Components\Elements;

use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\View\Component;

class Body extends Component
{
    public $questionnaire;

    public $lang;

    public function __construct()
    {
        $this->questionnaire = (new Cerebrus())->get('questionnaire');
        $this->lang = (new Cerebrus())->get('lang');
    }

    public function render()
    {
        return view('qrfeedz::components.elements.body');
    }
}
