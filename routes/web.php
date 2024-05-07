<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ProductController::class, 'index']);

Route::get('/home', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'show']);

Route::get('/product/{id}', [ProductController::class, 'detail']);

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::post('/wishlist/{id}', [ProductController::class, 'wishlist']);

Route::delete('/wishlist/destroy/{product}', [WishlistController::class, 'destroy']);

Route::post('feedback', [FeedbackController::class, 'create']);

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/products', function () {
//     return view('productlist');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
