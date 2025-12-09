<?php

use App\Http\Controllers\AppointmentController;
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

// Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
// Route::get('/appointments/create', [AppointmentController::class, 'create']) -> name('appointments.create');
// Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
// Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
// Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit']);
// Route::get('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
// Route::get('/appointments/{id}', [AppointmentController::class, 'destroy']);

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::patch('/appointments/{appointment}', [AppointmentController::class, 'update']);
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');