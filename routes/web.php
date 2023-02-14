<?php

use App\Http\Controllers\admin\ComicsController as AdminComicsController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
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
    Route::get('home', [AdminHomeController::class, 'home'])->name('home');
    Route::resource('comics', AdminComicsController::class);
});

// Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
// Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
