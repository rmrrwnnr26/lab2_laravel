<?php

use App\Http\Controllers\CategoryControllerApi;
use App\Http\Controllers\ServiceControllerApi;
use App\Http\Controllers\AppointmentControllerApi;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/category', [CategoryControllerApi::class, 'index']);
Route::get('/category/{id}', [CategoryControllerApi::class, 'show']);

Route::get('/service', [ServiceControllerApi::class, 'index']);
Route::get('/service/{id}', [ServiceControllerApi::class, 'show']);

Route::get('/appointments', [AppointmentControllerApi::class, 'index']);
Route::get('/appointments/{id}', [AppointmentControllerApi::class, 'show']);

// Route::middleware('auth:sanctum')->get('/appointments', [AppointmentControllerApi::class, 'index']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/appointments', [AppointmentControllerApi::class, 'index']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
