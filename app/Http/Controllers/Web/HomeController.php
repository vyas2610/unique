<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\cr;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereHas('products')->orderBy('name')->get();

        $about = Page::where('slug', 'about-us')->first();

        $products = Product::latest()->paginate(8);

        $galleries = Gallery::latest()->paginate(8);

        $slider = Slider::latest()->paginate(3);

        $video = Video::latest()->paginate(6);

        $City = City::latest()->get();
        //$partner = cr::latest()->get();
        return view('web.pages.home.index', compact('categories', 'about', 'products', 'slider', 'galleries', 'video', 'City'));
    }
}
