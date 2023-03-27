<?php

namespace QRFeedz\Frontend\Views\Components;

use Illuminate\View\Component;
use QRFeedz\Cube\Models\Questionnaire;
use QRFeedz\Services\Color;

/**
 * The header component will design the top of the structure, mainly having
 * a logo, and a background SVG if it exists. The colors process is also
 * made using the phpleague/color-extractor package.
 */
class Header extends Component
{
    public $questionnaire;
    public $color;

    public function __construct(Questionnaire $questionnaire, Color $color)
    {
        dd($questionnaire, $color);

        $this->color = $color;
        $this->questionnaire = $questionnaire;
    }

    public function render()
    {
        return view('qrfeedz::components.layout.header');
    }
}
