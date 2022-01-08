<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VectorController;
use App\Http\Controllers\OrderdesignController;

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

Route::get('/orderdesign', [OrderdesignController::class,'index'])->name('orderdesign')->middleware('auth');

Route::get('/add-to-cart/{product}', [CartController::class,'add'])->name('cart.add')->middleware('auth');
Route::get('/cart', [CartController::class,'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [CartController::class,'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/fetchcart', [CartController::class,'fetchCart'])->name('fetch.cart')->middleware('auth');

Route::get('/products/{product}', [ProductController::class,'show'])->name('products.index')->middleware('auth');
Route::get('/product/upload',[ProductController::class,'create'])->name('products.anyar')->middleware('auth');;
Route::post('/product/upload/store',[ProductController::class,'store'])->name('products.store')->middleware('auth');;

Route::group(['middleware' => ['role:creator']], function () {
    Route::get('/profile/upload', [ProfileController::class,'uploadvector'])->name('profile.uploadvector')->middleware('auth');
});
Route::post('profile/upload/save',[VectorController::class,'save'])->name('save.vector');
Route::get('profile/fetchvector',[ProfileController::class,'indexManage'])->name('fetch.vector');
Route::get('profile/manage',[ProfileController::class,'indexManage'])->name('manage.index');
Route::get('profile/editvector/{id}',[ProfileController::class,'editVector'])->name('edit.vector');
Route::post('profile/storevector',[ProfileController::class,'storeVector'])->name('store.vector');
Route::post('profile/deletevector',[ProfileController::class,'deleteVector'])->name('delete.vector');

Route::get('/download/{idv}/{filename}',[VectorController::class,'download'])->name('download.vector');
Route::get('/vector/{vectorId}',[VectorController::class,'view'])->name('view.vector');

Route::get('/subscribe',[HomeController::class,'indexSubs'])->name('index.subs');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
