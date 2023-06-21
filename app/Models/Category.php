<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ["created_at", "updated_at"];

    protected $casts = [
        "created_at" => "datetime:F d,Y h:i A",
        "updated_at" => "datetime:F d,Y h:i A",
    ];
}
