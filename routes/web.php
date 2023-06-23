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
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ImageController;
use App\Http\Controllers\Web\PageController as WebPageController;
use App\Http\Controllers\Web\ProductController as WebProductController;
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
        Route::delete('slider/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

Route::get('/image-gallery', [ImageController::class, 'index'])->name('image-gallery.index');

Route::get('/video-gallery', function () {
    return view('web.pages.gallery.video');
})->name('video-gallery.index');


Route::get('/shop/{category?}', [WebProductController::class, 'index'])->name('shop.index');

Route::get('/shop-details/{product}', [WebProductController::class, 'show'])->name('shop.show');

Route::get('/{page}', [WebPageController::class, 'show'])->name('page.show');
