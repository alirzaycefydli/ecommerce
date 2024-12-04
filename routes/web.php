<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

//Products
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');

//Reviews
Route::post('/review/{product}', [ReviewController::class, 'store'])->name('review.store');

//Wishlists
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/add-to-wishlist/{product}', [WishlistController::class, 'store'])->name('wishlist.store');
Route::delete('wishlist/remove/{product}', [WishlistController::class,'destroy'])->name('wishlist.destroy');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::put('/cart', [CartController::class, 'update'])->name('cart.update');
Route::delete('cart/remove/{product}', [CartController::class,'destroy'])->name('cart.destroy');

