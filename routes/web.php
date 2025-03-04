<?php

use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/licenses-view', [LicenseController::class, 'listLicenses']);