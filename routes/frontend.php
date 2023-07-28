<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Frontend\Controllers\QuestionnaireController;

/*
|--------------------------------------------------------------------------
| QRFeedz Frontend Routes.
|--------------------------------------------------------------------------
|
*/
Route::get(
    '/qrcode/{questionnaire:uuid}',
    [QuestionnaireController::class, 'render']
)->name('survey.render')
    ->middleware('check-questionnaire');

Route::view('/', 'qrfeedz-frontend::public.welcome');