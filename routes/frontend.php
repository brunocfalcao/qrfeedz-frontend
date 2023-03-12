<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Frontend\Controllers\InstanceController;

/*
|--------------------------------------------------------------------------
| QRFeedz Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::view('instance/{code}', 'qrfeedz::instance');

//Route::get('instance/{questionnaire:uuid}', [InstanceController::class, 'new']);
