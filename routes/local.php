<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
        view('qrfeedz::exceptions.questionnaire-invalid');
});

Route::view('/template', 'qrfeedz::template');
