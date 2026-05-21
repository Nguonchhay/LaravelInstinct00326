<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [App\Http\Controllers\Api\UserApiController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'prefix' => 'doctors',
    'middleware' => ['auth:sanctum']
], function () {
    Route::get('/', [App\Http\Controllers\Api\DoctorApiController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Api\DoctorApiController::class, 'store']);
    Route::put('/{doctor}/update', [App\Http\Controllers\Api\DoctorApiController::class, 'update']);
    Route::delete('/{doctor}/destroy', [App\Http\Controllers\Api\DoctorApiController::class, 'destroy']);
});
