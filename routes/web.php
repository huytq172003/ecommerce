<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
//category
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'index'])->name('seach_category');
//product
Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'index'])->name('search_product');
Route::get('product/add', [ProductController::class, 'create'])->name('add_product');

// Route::match(['get', 'post'], 'product/add', [ProductController::class, 'create'])->name('add_product');
