<?php

namespace Database\Seeders;

use App\Models\AdminMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminMenu::whereRaw('1=1')->delete();

        $data = [
            [
                'id'    => 1,
                'label' => 'Dashboard',
                'icon'  => 'bx bxs-dashboard',
                'route_name' => 'admin.dashboard',
                'admin_menu_id' => null,
            ],
            // [
            //     'id'    => 2,
            //     'label' => 'Master',
            //     'icon'  => 'bx bx-grid-alt',
            //     'route_name' => null,
            //     'admin_menu_id' => null,
            // ],
            // [
            //     'id'    => 3,
            //     'label' => 'State',
            //     'icon'  => 'bx bx-globe',
            //     'route_name' => 'admin.state.index',
            //     'admin_menu_id' => null
            // ],
            // [
            //     'id'    => 4,
            //     'label' => 'City',
            //     'icon'  => 'bx bx-globe',
            //     'route_name' => 'admin.city.index',
            //     'admin_menu_id' => null,
            // ],
            [
                'id'    => 5,
                'label' => 'Category',
                'icon'  => 'bx bx-grid-alt',
                'route_name' => null, //'admin.package.index',
                'admin_menu_id' => null
            ],
            [
                'id'    => 6,
                'label' => 'Pages',
                'icon'  => 'bx bx-file',
                'route_name' => 'admin.page.index',
                'admin_menu_id' => null,
            ],
            [
                'id'    => 7,
                'label' => 'Slides',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => null,
                'route_name' => 'admin.slider.index',
            ],
            [
                'id'    => 8,
                'label' => 'Testimonials',
                'icon'  => 'bx bx-group',
                'admin_menu_id' => null,
                'route_name' => 'admin.testimonial.index',
            ],
            [
                'id'    => 9,
                'label' => 'Enquiries',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => null,
                'route_name' => null, // 'admin.booking.index',
            ],
            [
                'id'    => 24,
                'label' => 'Logout',
                'icon'  => 'bx bx-power-off',
                'route_name' => 'admin.logout',
                'admin_menu_id' => null,
            ],
        ];

        AdminMenu::insert($data);
    }
}
