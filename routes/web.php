<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Products
Route::get('products/new', [\App\Http\Controllers\ProductsController::class, 'create']);
Route::post('products', [\App\Http\Controllers\ProductsController::class, 'store']);
Route::delete('products/{id}', [\App\Http\Controllers\ProductsController::class, 'destroy']);

// Order
Route::get('products/{id}/order', [\App\Http\Controllers\ProductOrderController::class, 'create']);
Route::post('products/{id}/order/new', [\App\Http\Controllers\ProductOrderController::class, 'store']);

// Reviews
Route::get('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'index']);
Route::get('products/{id}/reviews/new', [\App\Http\Controllers\ProductReviewsController::class, 'create']);
Route::post('products/{id}/reviews', [\App\Http\Controllers\ProductReviewsController::class, 'store']);

// Add/clear like to review
Route::post('reviews/{id}/like-reviews', [\App\Http\Controllers\LikeReviewController::class, 'store']);
Route::put('reviews/{id}/like-reviews', [\App\Http\Controllers\LikeReviewController::class, 'update']);

//Wishlist
Route::get('products/{id}/wishlist', [\App\Http\Controllers\ProductWishListController::class, 'store']);

// Image cover
Route::put('products/{id}/cover-image', [\App\Http\Controllers\ProductCoverImageController::class, 'update']);

// ApplePAy, Stripe, PayPall













