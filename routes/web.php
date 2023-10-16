<?php

use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, "home"])->name("home");
Route::get('/product/{slug}', [ViewController::class, "product"])->name("product");
Route::get('/cart', [ViewController::class, "cart"])->name("cart");
Route::get('/order', [ViewController::class, "order"])->name("order");
Route::get('/orderdetail', [ViewController::class, "orderdetail"])->name("orderdetail");
