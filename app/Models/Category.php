<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'image', 'display',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

//    public function productsAvilable()
//    {
//        return $this->products()->take(3)->where('display', 1);
//
////         $avilableProduct = $this->with([ 'category' => function ($query){
////            $query->where('display' , 1);
////        }])->take(3);
////         return $avilableProduct ;
//    }
}
