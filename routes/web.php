<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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
Route::redirect('/', '/dashboard');
Route::middleware('auth:sanctum')->get('/dashboard', [HomeController::class,'index'])->name('dashboard');

Route::get('/add-to-cart/{product}', [CartController::class,'add'])->name('cart.add')->middleware('auth');
Route::get('/cart', [CartController::class,'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [CartController::class,'destroy'])->name('cart.destroy')->middleware('auth');

Route::get('/product/{product}', [ProductController::class,'index'])->name('products.index')->middleware('auth');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
