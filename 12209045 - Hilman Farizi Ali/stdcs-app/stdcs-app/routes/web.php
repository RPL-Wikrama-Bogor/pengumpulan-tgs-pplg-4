<?php

use App\Http\Controllers\LetterController;
use App\Http\Controllers\LetterTypeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class, 'dashboard'])->name('dashboard');

Route::prefix('/user')->name('user.')->group(function() {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('home');
    // Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    // Route::patch('/{id}', [UserController::class, 'update'])->name('update');
    // Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
});
