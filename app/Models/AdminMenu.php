<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['routes'];

    public function getRoutesAttribute()
    {
        $children = $this->children();

        $routes = [$this->route_name];

        if ($children->count()) {
            foreach ($this->children as $c) {
                $routes[] = $c->route_name;
            }
        }

        return $routes;
    }

    public function children()
    {
        return $this->hasMany(AdminMenu::class);
    }
}
