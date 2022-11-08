<?php

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
Route::get('/register', [PublicController::class, 'registerview'])->name('registerview');
Route::get('/login', [PublicController::class, 'loginview'])->name('loginview');