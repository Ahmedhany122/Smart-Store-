<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'home']);

Route::get('/products', [ProductController::class, 'allProducts']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/cart/{id}', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::post('/cart/remove/{id}', [ProductController::class, 'removeFromCart']);

Route::get('/admin', [ProductController::class, 'admin']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);

Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);

Route::post('/delete/{id}', [ProductController::class, 'delete']);

Route::get('/about', function() {return view('aboute');});

Route::get('/contact', function() {return view('contact');});

Route::get('/checkout', [ProductController::class, 'checkout']);
Route::post('/place-order', [ProductController::class, 'placeOrder']);
Route::get('/success', [ProductController::class, 'success']);