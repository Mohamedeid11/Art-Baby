<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name_ar', 'name_en', 'desc_ar', 'desc_en', 'price', 'display',
        'deliverable', 'featured', 'color_id',
    ];

//    protected $with = ['reviews'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products',
            'product_id'
            , 'order_id');
    }

//    public function getRateAttribute()
//    {
//        return $this->reviews->avg('rate') ?? 0;
//    }

    public function size()
    {
        return $this->belongsToMany(Size::class, 'size_products');
    }

    public function color()
    {
        return $this->belongsToMany(Color::class, 'color_products');
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class, 'weight_id');
    }
}
