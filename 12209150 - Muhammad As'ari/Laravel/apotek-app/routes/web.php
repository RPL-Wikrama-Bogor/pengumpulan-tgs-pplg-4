    <?php

    use App\Http\Controllers\UserController;
    use App\Http\Controllers\MedicineController;
    use App\Http\Controllers\OrderController;
    use Illuminate\Support\Facades\Route;

    Route::middleware([IsGuest::class])->group(function () {
        Route::get('/', function () {
            return view('login');
        })->name('login');

        Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');
    });


    Route::get('/error-permission', function () {
        return view('errors.permission');
    })->name('error.permission');

    Route::middleware(['IsLogin'])->group(function () {
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/home', function () {
            return view('home');
        })->name('home.page');
    });

    Route::middleware(['IsLogin', 'IsAdmin'])->group(function () {
        Route::get('/home', function () {
            return view('home');
        })->name('home.page');

        Route::prefix('/medicine')->name('medicine.')->group(function () {
            Route::get('/create', [MedicineController::class, 'create'])->name('create');
            Route::post('/store', [MedicineController::class, 'store'])->name('store');
            Route::get('/', [MedicineController::class, 'index'])->name('home');
            Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
            Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
            Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
            Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
            Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
            Route::get('/print/{id}', [OrderController::class, 'show'])->name('print');
            Route::get('/download/{id}', [OrderController::class, 'downloadPDF'])->name('download');
        });

        Route::prefix('/user')->name('user.')->group(function () {
            Route::get('/index', [UserController::class, 'index'])->name('index');
            Route::get('/home', [UserController::class, 'index'])->name('home');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
        });

        Route::prefix('/order')->name('order.')->group(function () {
            Route::get('/data', [OrderController::class, 'data'])->name('data');
            Route::get('/export-excel', [OrderController::class, 'exportExcel'])->name('export-excel');
        });
    });

    Route::middleware(['IsLogin', 'IsKasir'])->group(function () {
        Route::prefix('/kasir')->name('kasir.')->group(function () {
            Route::prefix('/order')->name('order.')->group(function () {
                Route::get('/', [OrderController::class, 'index'])->name('index');
                Route::get('/create', [OrderController::class, 'create'])->name('create');
                Route::post('/store', [OrderController::class, 'store'])->name('store');
                Route::get('/print/{id}', [OrderController::class, 'show'])->name('print');
                Route::get('/download/{id}', [OrderController::class, 'downloadPDF'])->name('download');
                Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('delete');
            });
        });
    });

    Route::middleware('IsLogin')->group(function () {
        Route::get('/home', function () {
            return view('home');
        })->name('home.page');


        Route::prefix('/medicine')->name('medicine.')->group(function () {
            Route::get('/create', [MedicineController::class, 'create'])->name('create');
            Route::post('/store', [MedicineController::class, 'store'])->name('store');
            Route::get('/', [MedicineController::class, 'index'])->name('home');
            Route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
            Route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
            Route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
            Route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
            Route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');
        });

        Route::prefix('/user')->name('user.')->group(function () {
            Route::get('/index', [UserController::class, 'index'])->name('index');
            Route::get('/home', [UserController::class, 'index'])->name('home');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
        });
    });
