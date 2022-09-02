<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    // >>> insira suas rotas aqui !!!!! <<<

    Route::get('/', function () {
        return view('dashboard');
    })/*->middleware('auth')*/;

    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');

    Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
    Route::get('/produtos/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/produtos/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/produtos/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/produtos/store', [ProductController::class, 'store'])->name('products.store');
    Route::put('/produtos/{product}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/produtos/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/estoques', [StorageController::class, 'index'])->name('storages.index');
    Route::get('/estoques/create', [StorageController::class, 'create'])->name('storages.create');
    Route::get('/estoques/{storage}/edit', [StorageController::class, 'edit'])->name('storages.edit');
    Route::get('/estoques/{storage}', [StorageController::class, 'show'])->name('storages.show');
    Route::post('/estoques/store', [StorageController::class, 'store'])->name('storages.store');
    Route::put('/estoques/{storage}/update', [StorageController::class, 'update'])->name('storages.update');
    Route::delete('/estoques/{storage}', [StorageController::class, 'destroy'])->name('storages.destroy');

});


Route::get('/dale', function() {
    return view('dale');
});

require __DIR__.'/auth.php';
