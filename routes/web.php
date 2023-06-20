<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::group(["prefix" => 'furniture-admin'], function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('login.post');

    Route::group(['middleware' => 'auth', 'as' => 'admin.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //Route::get('/', [CategoryController::class, 'index'])->name('category');
        Route::get('/logout', function () {
            Auth::logout();
            return redirect(route('login'))->with('success', 'Success! You\'ve logged out.');
        })->name('logout');

        Route::resources([
            'page'          => PageController::class,
            'slider'        => SliderController::class,
            'testimonial'   => TestimonialController::class,
            'product'       => ProductController::class,
            'category'      => CategoryController::class,
            'city'          => CityController::class,
            'gallery'       => GalleryController::class,
            'video'         => VideoController::class,


        ]);
        /* Route::get('/', function () {
            return view('resources.views.product.index');
        })->name('product.index');*/
    });
});

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
