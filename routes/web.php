<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PublicController::class, 'welcome'])->name('welcome');
// route to register
Route::get('/register', [PublicController::class, 'registerview'])->name('registerview');
Route::post('/register', [PublicController::class, 'register'])->name('register');

Route::get('/login', [PublicController::class, 'loginview'])->name('loginview');
Route::post('/login', [PublicController::class, 'login'])->name('login');

Route::get('/logout', [PublicController::class, 'logout'])->name('logout');

// form pubblica annuncio
Route::get('/pubblica', [PublicController::class, 'publicAnnuncement'])->name('publicAnnuncement');
