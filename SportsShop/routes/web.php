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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/delivery', function () {
   return view('delivery');
});

Route::get('/auth', function () {
    return view('auth');
});

use App\Http\Controllers\ProductController;

Route::get('/catalog', [ProductController::class, 'getProducts'])->name('catalog');
Route::get('/catalog/{id}', [ProductController::class, 'getProduct'])->name('catalog.getProduct');


use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\BasketController;

Route::get('/basket', [BasketController::class, 'getBasket'])->name('basket');
Route::post('/basket/add', [BasketController::class, 'addToBasket'])->name('add_to_basket');
