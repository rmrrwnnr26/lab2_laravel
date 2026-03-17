<?php

use App\Http\Controllers\CategoryControllerApi;
use App\Http\Controllers\ServiceControllerApi;
use App\Http\Controllers\AppointmentControllerApi;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryControllerApi::class, 'index']);
Route::get('/category/{id}', [CategoryControllerApi::class, 'show']);

Route::get('/service', [ServiceControllerApi::class, 'index']);
Route::get('/service/{id}', [ServiceControllerApi::class, 'show']);

Route::get('/appointments', [AppointmentControllerApi::class, 'index']);
Route::get('/appointments/{id}', [AppointmentControllerApi::class, 'show']);