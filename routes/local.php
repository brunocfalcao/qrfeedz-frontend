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

    return redirect("/qrcode/{$questionnaire->uuid}")->withInput();
});

//Route::view('mobile', 'qrfeedz::mobile');

Route::view('colors', 'qrfeedz::colors');

Route::get('tests/{view}', function (string $view) {
    return view('qrfeedz::tests.'.$view);
});

Route::get('progress/{view}', function (string $view) {
    return view('qrfeedz::tests.progress.'.$view);
});

Route::get('image/{imageName}', function ($imageName) {
    $path = __DIR__.("/../resources/images/{$imageName}");
    $type = File::mimeType($path);
    $headers = ['Content-Type' => $type];
    $content = File::get($path);

    return Response::make($content, 200, $headers);
});

/*
Route::get('/upload', function () {
    return view('qrfeedz::upload');
});

Route::post('/upload', function (Request $request) {
    $file = $request->file('file');
    $filename = $file->getClientOriginalName();
    Storage::putFileAs('public', $file, $filename);
    $url = Storage::url($filename);
    return view('qrfeedz::upload')->with('url', $url);
});
*/
