<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ComplaintController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\UserController;

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('complaints', ComplaintController::class);
    Route::apiResource('educations', EducationController::class);
    Route::put('/user/{user}', [UserController::class, 'update']);
    Route::get('logout-user', [UserController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user()->loadCount('complaints');
    });
});
