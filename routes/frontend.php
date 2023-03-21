<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Cube\Models\Questionnaire;
use QRFeedz\Frontend\Controllers\RenderController;

/*
|--------------------------------------------------------------------------
| QRFeedz Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::get(
    '/qrcode/{questionnaire:uuid}',
    [RenderController::class, 'renderSurvey']
)->name('survey.render')
 ->middleware('check-questionnaire');

Route::get(
    'tests/first',
    function () {
        return redirect('/qrcode/'.Questionnaire::all()->first()->uuid);
    }
)->name('survey.first');

Route::view('instance', 'qrfeedz::instance');
