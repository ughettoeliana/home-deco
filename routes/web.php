<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/products', [\App\Http\Controllers\ProductsController::class, 'index'])
    ->name('products');

Route::get('/products/new', [\App\Http\Controllers\ProductsController::class, 'createProduct'])
    ->name('products.createProduct');

Route::post('/products/new', [\App\Http\Controllers\ProductsController::class, 'processNewProduct'])
    ->name('products.processNewProduct');

Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'view'])
    ->name('products.view')
    ->whereNumber('id');

Route::get('/products/{id}/edit', [\App\Http\Controllers\ProductsController::class, 'formUpdate'])
    ->name('products.formUpdate')
    ->whereNumber('id');

Route::post('/products/{id}/edit', [\App\Http\Controllers\ProductsController::class, 'processUpdate'])
    ->name('products.processUpdate')
    ->whereNumber('id');

Route::get('/products/{id}/delete', [\App\Http\Controllers\ProductsController::class, 'confirmDelete'])
    ->name('products.confirmDelete')
    ->whereNumber('id');

Route::post('/products/{id}/delete', [\App\Http\Controllers\ProductsController::class, 'processDelete'])
    ->name('products.processDelete')
    ->whereNumber('id');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard');
