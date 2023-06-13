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
    return view('web.pages.home.index');
})->name('home');

Route::get('/contact-us', function () {
    return view('web.pages.contact.index');
})->name('contact.index');

Route::get('/image-gallery', function () {
    return view('web.pages.gallery.image');
})->name('image-gallery.index');

Route::get('/video-gallery', function () {
    return view('web.pages.gallery.video');
})->name('video-gallery.index');


Route::get('/shop/{category}', function ($category) {
    return view('web.pages.shop.index', compact('category'));
})->name('shop.index');

Route::get('/shop-details/{product}', function ($product) {
    return view('web.pages.shop.show', compact('product'));
})->name('shop.show');

Route::get('/{page}', function ($page) {
    return view('web.pages.page.show', compact('page'));
})->name('page.show');
