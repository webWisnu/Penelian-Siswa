<?php

use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [Logincontroller::class, 'index'])->name('login');
