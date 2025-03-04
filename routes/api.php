<?php

use App\Http\Controllers\Api\LicenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('/license', App\Http\Controllers\Api\LicenseController::class);

Route::post('/check-license', [App\Http\Controllers\Api\LicenseController::class, 'checkLicense']);