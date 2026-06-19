<?php




// Route::get('/', fn() => view('home'));
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/gallery', 'gallery');
Route::view('/product', 'product');
Route::view('/contact', 'contact');
Route::view('/product-fire', 'product-fire');
Route::view('/product-display', 'product-display');
Route::view('/product-intrusion', 'product-intrusion');
Route::view('/product-cctv', 'product-cctv');
Route::view('/product-it', 'product-it');
Route::view('/product-pa', 'product-pa');
Route::view('/product-security', 'product-security');
Route::view('/product-conference', 'product-conference');

Route::view('/review', 'review');
Route::view('/knowledge', 'knowledge');


use App\Http\Controllers\ReviewController;

Route::get('/review', [ReviewController::class, 'index'])->name('review');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');


