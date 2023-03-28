<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Frontend\Controllers\QuestionnaireController;

/*
|--------------------------------------------------------------------------
| QRFeedz Frontend Routes
|--------------------------------------------------------------------------
|
*/
Route::get(
    '/qrcode/{questionnaire:uuid}',
    [QuestionnaireController::class, 'renderSurvey']
)->name('survey.render')
 ->middleware('check-questionnaire');

Route::get('first', [QuestionnaireController::class, 'first']);

Route::view('mobile', 'qrfeedz::mobile');

Route::view('colors', 'qrfeedz::colors');

Route::view('/view/{view}', function (string $view) {
    return view('qrfeedz::'.$view);
});
