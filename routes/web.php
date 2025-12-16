<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

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

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store')->middleware('auth');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show')->middleware('auth');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit')->middleware('auth');
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update')->middleware('auth');
Route::patch('/appointments/{appointment}', [AppointmentController::class, 'update'])->middleware('auth');
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/auth', [LoginController::class, 'authenticate']);
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/auth', [LoginController::class, 'login'])->name('login');

Route::get('/', function () {
    return redirect()->route('appointments.index');
});

Route::get('/error', function() {
    return view('error', ['message' => session('message')]);
});