<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
