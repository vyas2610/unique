<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime: d.m.y | h:i A',
        'updated_at' => 'datetime: d.m.y | h:i A',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
