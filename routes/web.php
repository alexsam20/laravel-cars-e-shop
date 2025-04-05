<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginComtroller;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/signup', [SignupController::class, 'create']);
Route::get('/login', [LoginComtroller::class, 'create']);
