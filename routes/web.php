<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Products Auth::user()->role === 'admin'
Route::post('products', [\App\Http\Controllers\ProductsController::class, 'store']);
Route::delete('products/{id}', [\App\Http\Controllers\ProductsController::class, 'destroy']);

//Add product to order
Route::post('products/{id}/order', [\App\Http\Controllers\ProductOrdersController::class, 'store']);

// Reviews
Route::get('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'index']);
Route::post('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'store']);

// Add/remove like to review
Route::post('reviews/{id}/liked', [\App\Http\Controllers\LikedReviewsController::class, 'store']);
Route::delete('reviews/{id}/liked', [\App\Http\Controllers\LikedReviewsController::class, 'destroy']);

//Add Wishlist
Route::post('products/{id}/wishlist', [\App\Http\Controllers\ProductWishListController::class, 'store']);

// Image cover Auth::user()->role === 'admin'
Route::put('products/{id}/image', [\App\Http\Controllers\ProductCoverImageController::class, 'update']);

// ApplePAy, Stripe, PayPall
Route::post('products/{id}/apple-pay', [\App\Http\Controllers\Pay\ApplePayController::class, 'store']);
Route::post('products/{id}/pay-pall', [\App\Http\Controllers\Pay\ApplePayController::class, 'store']);
Route::post('products/{id}/stripe', [\App\Http\Controllers\Pay\ApplePayController::class, 'store']);












