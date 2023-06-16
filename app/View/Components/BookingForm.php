<?php

namespace App\View\Components;

use App\Models\City;
use App\Models\Package;
use Illuminate\View\Component;

class BookingForm extends Component
{
    public $package;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($package = null)
    {
        // dd(compact('package'));
        $this->package = $package;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $packages = Package::pluck("title", "id");
        $cities = City::pluck("name", "name");

        $package = $this->package;

        // var_dump($package);

        return view('components.booking-form', compact('packages', 'cities', 'package'));
    }
}
