<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $site = new Site();
        $site->title = "Furniture Website";
        $site->tagline = "";
        $site->email = "info@example.com";
        $site->phone = "123 456 7890";
        $site->save();
    }
}
