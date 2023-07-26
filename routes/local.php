<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Cube\Models\Questionnaire;

/*
|--------------------------------------------------------------------------
| QRFeedz Local environment routes.
|--------------------------------------------------------------------------
|
*/

Route::get('/first', function () {
    $questionnaire = Questionnaire::first();

    return $questionnaire ?
        redirect("/qrcode/{$questionnaire->uuid}")->withInput() :
        view('qrfeedz-frontend::exceptions.questionnaire-invalid');
});
