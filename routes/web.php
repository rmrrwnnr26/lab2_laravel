<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/{id}', [ServiceController::class, 'show']);

Route::get('/service1/{id}', [ServiceUserController::class, 'show'])->name('service_show');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user_show');