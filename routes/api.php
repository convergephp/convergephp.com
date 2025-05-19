<?php

use App\Http\Controllers\Api\ActivationsController;
use App\Http\Controllers\Api\LicensesAuthController;
use App\Http\Controllers\LicenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('licenses/verify', LicensesAuthController::class)->middleware('auth:license');

Route::post('activations/create', [ActivationsController::class, 'create']);
Route::post('activations/{activation:uuid}/show', [ActivationsController::class, 'show']);
Route::post('activations/{activation:uuid}/version', [ActivationsController::class, 'update']);
Route::delete('activations/{activation:uuid}', [ActivationsController::class, 'destroy']);
