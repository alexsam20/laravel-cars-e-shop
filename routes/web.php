<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::get('/car', [CarController::class, 'index'])->name('car.index');
