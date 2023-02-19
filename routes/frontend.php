<?php

use Illuminate\Support\Facades\Route;
use QRFeedz\Frontend\Controllers\InstanceController;

/*
|--------------------------------------------------------------------------
| QRFeedz Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::get('instance/{uuid}', [InstanceController::class, 'new']);
