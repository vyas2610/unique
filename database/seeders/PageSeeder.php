<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page();
        $page->title = "About Us";
        $page->slug = "about-us";
        $page->save();

        $page = new Page();
        $page->title = "Terms & Conditions";
        $page->slug = "terms-and-conditions";
        $page->save();

        $page = new Page();
        $page->title = "Privacy Policy";
        $page->slug = "privacy-policy";
        $page->save();

        $page = new Page();
        $page->title = "Disclaimer";
        $page->slug = "disclaimer";
        $page->save();
    }
}
