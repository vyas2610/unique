<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $appends = ["image"];

    protected $casts = [
        'created_at'    => 'datetime: d.m.y | h:i A',
        'updated_at'    => 'datetime: d.m.y | h:i A',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(PackageImage::class);
    }

    public function getImageAttribute()
    {
        return $this->images->count() ? $this->images[0]->image : null;
    }
}
