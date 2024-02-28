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

Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'view']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin');
