<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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

//Route::view('mobile', 'qrfeedz::mobile');

Route::view('colors', 'qrfeedz::colors');

Route::get('tests/{view}', function (string $view) {
    return view('qrfeedz::tests.'.$view);
});

Route::get('progress/{view}', function (string $view) {
    return view('qrfeedz::tests.progress.'.$view);
});

Route::get('image/{imageName}', function ($imageName) {
    $path = __DIR__ . ("/../resources/images/{$imageName}");
    $type = File::mimeType($path);
    $headers = ['Content-Type' => $type];
    $content = File::get($path);
    return Response::make($content, 200, $headers);
});
