<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ourFollowers extends Model
{
    protected $table = 'our_followers';
    protected $fillable = [
        'email'
    ];
}

