<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'position_ar', 'position_en', 'desc_ar', 'desc_en', 'image', 'display'
    ];
}
