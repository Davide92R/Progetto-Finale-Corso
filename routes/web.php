<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnounceController;

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
Route::get('/pubblica', [AnnounceController::class, 'publicAnnouncement'])->middleware('auth')->name('publicAnnouncement');
//rotte per mostrare categorie
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');
// rotta parametrica dettaglio annuncio
Route::get('/dettaglio/annuncio/{announce}', [AnnounceController::class, 'showAnnouncement'])->name('showAnnouncement');
// pagina di tutti gli annunci
Route::get('/tutti/annunci', [AnnounceController::class, 'announcementIndex'])->name('announcementIndex');

// ROTTE REVISOR

// rotta per la home del revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('IsRevisor')->name('revisor.index');
// rotta accettazione annuncio
Route::patch('/accetta/annuncio/{announce}', [RevisorController::class, 'acceptAnnounce'])->middleware('IsRevisor')->name('revisor.accept_announce');
// rotta per rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announce}', [RevisorController::class, 'rejectAnnounce'])->middleware('IsRevisor')->name('revisor.reject_announce');

Route::get('/lavora-con-noi', [RevisorController::class, 'becomeRevisor'])->middleware("auth")->name('becomeRevisor');

Route::get('/becomeRevisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
//Rotta ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAnnounces'])->name('announces.search');
// rotta bandiere
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');
