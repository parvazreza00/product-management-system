<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('product-index');
Route::get('/products/create', [ProductController::class, 'productCreate'])->name('product-create');
Route::post('/products', [ProductController::class, 'productStore'])->name('product-store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product-show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product-update');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('product-delete');


