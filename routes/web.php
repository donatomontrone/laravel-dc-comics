<?php

use App\Http\Controllers\admin\ComicController as AdminComicController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\guests\HomeController as GuestsHomeController;
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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'home'])->name('home');
    Route::resource('comics', AdminComicController::class);
});


    Route::get('/', [GuestsHomeController::class, 'home'])->name('guests.home');


// Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
// Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
