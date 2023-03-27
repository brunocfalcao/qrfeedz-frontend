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

Route::get('framework', [RenderController::class, 'framework']);
