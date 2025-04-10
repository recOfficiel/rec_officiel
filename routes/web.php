<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/annonces', 'annonce')->name('annonce');
    Route::get('/apropos', 'about')->name('apropos');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/annonces/{annonce}', 'show')->name('annonce.show');

});
