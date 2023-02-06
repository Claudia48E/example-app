<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginRegisterController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('products', [ProductController::class, 'products'])->name('products');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::POST('remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::POST('edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');
Route::get('add_to_card', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('Checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('place_order', [CartController::class, 'place_order'])->name('place_order');

Route::get('welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('booking', [HomeController::class, 'booking'])->name('booking');
Route::get('delivery', [HomeController::class, 'delivery'])->name('delivery');
Route::get('cook at home', [HomeController::class, 'cookAthome'])->name('cook at home');
Route::get('restaurant', [HomeController::class, 'restaurant'])->name('restaurant');

Route::get('stripe', [PayController::class, 'stripe']);

Route::get('payment', [PayController::class, 'payStripe']);
Route::get('thankyou', [PayController::class, 'thankyou']);

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('register', 'register')->name('register');
    Route::post('store', 'store')->name('store');
    Route::get('login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::post('logout', 'logout')->name('logout');
});
?>