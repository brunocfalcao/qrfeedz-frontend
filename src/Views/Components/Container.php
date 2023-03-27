<?php

namespace QRFeedz\Frontend\Views\Components;

use Illuminate\View\Component;
use QRFeedz\Cube\Models\Questionnaire;

class Container extends Component
{
    public $questionnaire;

    public function __construct(Questionnaire $questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    public function render()
    {
        return view('qrfeedz::components.layout.container')
               ->with('sharedQuestionnaire', $this->questionnaire);
    }
}
