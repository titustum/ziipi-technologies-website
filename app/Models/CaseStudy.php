<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'short_desc',
        'full_desc',
        'banner_pic',
    ];
}
