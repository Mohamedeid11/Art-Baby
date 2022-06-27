<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
