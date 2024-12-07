<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/tambah', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);
Route::post('/Order', [WelcomeController::class, 'CreateTransaction'])->name('transaction');
Route::get('/transaksi', [TransactionController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index' ]);
Route::get('/transaction/cetak', [TransactionController::class, 'cetak']);
