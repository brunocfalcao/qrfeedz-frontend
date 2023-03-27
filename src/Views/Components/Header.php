<?php

namespace QRFeedz\Frontend\Views\Components;

use Illuminate\View\Component;
use QRFeedz\Cube\Models\Questionnaire;

/**
 * The header component will design the top of the structure, mainly having
 * a logo, and a background SVG if it exists. The colors process is also
 * made using the phpleague/color-extractor package.
 */
class Header extends Component
{
    public $questionnaire;

    public function __construct(Questionnaire $questionnaire)
    {
        $this->questionnaire = $questionnaire;

        // Construct the colors array. Use the support class Services\Color.
    }

    public function render()
    {
        return view('qrfeedz::components.layout.header');
    }
}
