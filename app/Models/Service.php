<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Allow mass assignment on these fields
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'short_desc',
        'full_desc',
        'banner_pic',
    ];

    // Example of attribute casting (optional)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
