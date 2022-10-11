<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
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

Route::get('/', function () {
    return view('website.index');
})->name('home');

Route::get('/shop', function () {
    return view('website.shop');
})->name('shop');

Route::get('/detail', function () {
    return view('website.detail');
})->name('detail');

Route::get('/cart', function () {
    return view('website.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('website.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

Route::get('/login', function () {
    return view('backend.login');
})->name('login');

//Route::get('login', [LoginController::class, 'login']);

Route::get('login-post', [LoginController::class, 'loginPost'])->name('login-post');

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::controller(UserController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('user-validate_registration');

    Route::post('validate_login', 'validate_login')->name('user-validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});

Route::get('products', [ProductController::class, 'index'])->name('products');

Route::post('add-product', [ProductController::class, 'addProduct'])->name('add-product');

Route::get('product-list', [ProductController::class, 'getProduct'])->name('product-list');
