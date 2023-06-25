<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $casts = [
        'date'          => 'date: d.m.Y',
        'created_at'    => 'datetime: d.m.y | h:i A',
        'updated_at'    => 'datetime: d.m.y | h:i A',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
