<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
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
    Route::post('/annonces/{annonce}/commentaire', 'commentaire')->name('annonce.commentaire');
    Route::get('/annonces/{annonce}', 'show')->name('annonce.show');

});


// Route pour le dashboard user
Route::middleware(['auth', 'role:user'])
     ->group(function () {
         Route::get('/user/dashboard', [ClientController::class, 'index'])
              ->name('client.dashboard');
         // autres routes user…
     });

// Route pour le dashboard admin
Route::prefix('admin')
     ->middleware(['auth', 'role:admin'])
     ->group(function () {
         Route::get('/dashboard', [AdminController::class, 'index'])
              ->name('admin.dashboard');
         // autres routes admin…
     });


// Auth
require __DIR__.'/auth.php';
