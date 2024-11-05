<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'index'])->name('login-page')
    ->middleware('checklogin');
Route::post('/login-proscess', [LoginController::class, 'auth'])->name('login-proscess');

Route::get('/register', [LoginController::class, 'register'])->name('register-page')
    ->middleware('checklogin');
Route::get('/register', [LoginController::class, 'register'])->name('register-page')
    ->middleware('checklogin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin-page')
    ->middleware('checklogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
