<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::controller(RegisterController::class)->group(function (){
    Route::get('/register', 'register')->name('register');
});
Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'login')->name('login');
});
