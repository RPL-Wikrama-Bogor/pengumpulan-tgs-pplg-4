<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('user.dashboard');
})->name('dashboard');

Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('userDelete');

Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::prefix('/guru')->name('guru.')->group(function () {
        Route::get('/', [UserController::class, 'guruIndex'])->name('index');
        Route::get('/create', [UserController::class, 'guruCreate'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'guruEdit'])->name('edit');
        Route::patch('/edit/{id}', [UserController::class, 'guruUpdate'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });
});

Route::prefix('/user')->name('user.')->group(function () {
    Route::prefix('/tataUsaha')->name('tataUsaha.')->group(function () {
        Route::get('/', [UserController::class, 'tataUsahaIndex'])->name('index');
        Route::get('/create', [UserController::class, 'tataUsahaCreate'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'tataUsahaEdit'])->name('edit');
        Route::patch('/edit/{id}', [UserController::class, 'tataUsahaUpdate'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });
});