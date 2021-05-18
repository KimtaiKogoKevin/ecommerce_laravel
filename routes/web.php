<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\CategoryController;

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

Route::view('login', 'login');
Route::view('register', 'register');
Route::view('sidebar', 'sidebar');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post('/login', [UserController::class,'login'])->name('login');
Route::post('/register', [UserController::class,'register'])->name('register');



Route::get('/shop', [ShopController::class,'index'])->name('shop');
Route::get('/detail/{id}', [ShopController::class,'detail'])->name('shop.details');
Route::get('/search', [ShopController::class,'search'])->name('search');
Route::post("add_to_cart", [ShopController::class,'addtocart'])->name('add_to_cart');
Route::get("cartlist", [ShopController::class,'cartList'])->name('cartlist');
Route::get("remove/{id}", [ShopController::class,'removecartitem'])->name('removecartitem');
Route::get("checkout", [ShopController::class,'checkout'])->name('search');
Route::post("placeorder", [ShopController::class,'placeorder'])->name('placeorder');
Route::get("orders", [ShopController::class,'orders'])->name('orders');



Route::get('image-upload-preview', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'store'])->name('image.store');






