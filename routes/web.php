<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockBatchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::view('/dashboard', 'dashboard.index')->name('dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/index', [ProductController::class, 'index'])->name('product.index');

        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.create');
    });

    Route::prefix('stocks')->group(function () {
        Route::get('/index', [StockBatchController::class, 'index'])->name('stock.index');

        Route::get('/create', [StockBatchController::class, 'create'])->name('stock.create');
        Route::post('/create', [StockBatchController::class, 'store'])->name('stock.create');

        Route::get('/out-create', [StockBatchController::class, 'stockOutCreate'])->name('stock.out-create');
        Route::post('/out-create', [StockBatchController::class, 'stockOutStore'])->name('stock.out-create');
    });
});
