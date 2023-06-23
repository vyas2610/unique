<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereHas('products')->orderBy('name')->get();

        $about = Page::where('slug', 'about-us')->first();

        $products = Product::latest()->paginate(8);

        $galleries = Gallery::latest()->paginate(8);

        return view('web.pages.home.index', compact('categories', 'about', 'products'));
    }
}
