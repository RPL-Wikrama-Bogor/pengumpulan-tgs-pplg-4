<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\userController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::middleware('IsGuest')->group(function() {
    Route::get('/', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
});

Route::get('/logout', [userController::class, 'logout'])->name('logout');

Route::get('/error-permission', function(){
    return view('errors.permission');
})->name('error.permission');

Route::middleware(['IsLogin'])->group(function() {
    Route::get('/logout', [userController::class, 'logout'])->name('logout');
    Route::get('/home', function (){
        return view('home');
    })->name('home.page');
});

Route::middleware(['IsLogin', 'IsAdmin'])->group(function() {

    //menu data obat
    Route::prefix('/medicine')->name('medicine.')->group(function() {
        Route::get('/create', [MedicineController::class, 'create'])->name('create');
        Route::post('/store', [MedicineController::class, 'store'])->name('store');
        Route::get('/', [MedicineController::class, 'index'])->name('home');
        Route::get('/edit/{id}', [MedicineController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [MedicineController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [MedicineController::class, 'destroy'])->name('delete');
        Route::get('/stock', [MedicineController::class, 'stock'])->name('stock');
        Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
        Route::patch('/data/stock{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
    });
    
    //menu kelola akun
    Route::prefix('/users')->name('users.')->group(function() {
        Route::get('/create', [userController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [userController::class, 'edit'])->name('edit');
        Route::delete('/delete/{id}', [userController::class, 'destroy'])->name('delete');
        Route::get('/', [userController::class, 'index'])->name('home');
        Route::post('/store', [userController::class, 'store'])->name('store');
        Route::patch('/{id}', [userController::class, 'update'])->name('update');
    });
});

Route::middleware(['IsLogin', 'IsKasir'])->group(function() {
    Route::prefix('/kasir')->name('kasir.')->group(function () {
        Route::prefix('/order')->name('order.')->group(function() {
            Route::get('/' , [OrderController::class, 'index'])->name('index');
            Route::get('/create', [OrderController::class, 'create'])->name('create');
            Route::post('/store', [OrderController::class, 'store'])->name('store');
            Route::get('/print/{id}', [OrderController::class, 'show'])->name('print');
        });
    });
});