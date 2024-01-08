<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('home');
    Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
});

Route::prefix('/userg')->name('userg.')->group(function(){
    Route::get('/createg', [UserController::class, 'createg'])->name('createg');
    Route::post('/storeg', [UserController::class, 'storeg'])->name('storeg');
    Route::get('/', [UserController::class, 'indexg'])->name('homeg');
    Route::get('/{id}', [UserController::class, 'editg'])->name('editg');
});

