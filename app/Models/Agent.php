<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{

    protected $fillable = [
        'name', 'phone', 'image', 'display', 'name_en', 'email', 'password'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
