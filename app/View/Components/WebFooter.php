<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\View\Component;

class WebFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $about = Page::where('slug', 'about-us')->first();
        $aboutText = strip_tags($about->description);
        $aboutText = substr($aboutText, 0, 250);
        $pages = Page::orderBy('title')->pluck('title', 'slug');
        return view('components.web-footer', compact('pages', 'aboutText'));
    }
}
