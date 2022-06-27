<?php

use App\Models\Client;
use App\Models\Color;
use App\Models\Country;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Size;
use App\Models\SizeProducts;

function sliderFormat(array $array, int $number)
{
    $arr = [];
    $x = 0;
    foreach ($array as $key => $item) {
        if ($key != 0 && $key % $number == 0) {
            $x++;
        }
        $arr[$x][] = $item;
    }
    return $arr;
}

function getCategories()
{
    return \App\Models\Category::all();
}

function getProductImage($product_id)
{
    return \App\Models\ProductImage::where('product_id', $product_id)->first()['image'];
}

function isFavorite($product_id)
{
    if (auth('client')->check()) {
        $fav = \App\Models\Favorite::where([
            ['client_id', auth('client')->user()->id],
            ['product_id', $product_id],
        ])->first();
        return $fav ? true : false;
    } else {
        return false;
    }
}

function hasDiscount($product)
{
    if ($product['discount'] && $product['discount_from'] <= date('Y-m-d') && $product['discount_to'] >= date('Y-m-d')) {
        return true;
    }
    return false;
}

function currencies()
{
    $currencies = \App\Models\Currency::where('display', 1)->get();

    $arr = [];
    foreach ($currencies as $currency) {
        $arr[] = $currency['name_' . app()->getLocale()];
    }
    return $arr;
}

function currencyValue()
{
    return session()->get('currency') ?? \App\Models\Currency::first()['value'];
}

function setting($key)
{
    return \App\Models\Setting::where('key', $key)->value('value');
}

function bahrain()
{
    return 'Bahrain (‫البحرين‬‎)';
}

function userInbahrain()
{
    if (auth('client')->check()) {
        if (auth('client')->user()['country_id'] == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

function getDeliveryCharge()
{
    $settins = Setting::select('value');

    if (auth('client')->check()) {
        if (auth('client')->user()->country_id != 1) {
            if (!session()->get('cash')) {
                return $settins->where('key', 'delivery_cost_outsize_online')->value('value');
            } else {
                return $settins->where('key', 'delivery_cost_outsize_cash')->value('value');
            }
        } else {
            if (!session()->get('cash')) {
                return $settins->where('key', 'delivery_cost_inside_online')->value('value');
            } else {
                return $settins->where('key', 'delivery_cost_inside_cash')->value('value');
            }
        }
    } else {
        return $settins->where('key', 'delivery_cost_inside_cash')->value('value');
    }

}

function getMinOrder()
{
    return setting('min_order');
}

function getCartCount()
{
    return session()->get('cart') ? count( session()->get('cart') ) : 0;
}

function getProduct($product_id)
{
    return Product::where('id', $product_id)->first();
}

function getSize($size_id)
{
    return Size::where('id', $size_id)->first();
}

function getProductSize($product_id, $size_id)
{
    return SizeProducts::where('product_id', $product_id)->where('size_id', $size_id)->first()['quantity'];
}
function getColor($color_id)
{
    return Color::where('id', $color_id)->first();
}

function getCountries()
{
    return Country::where('display', 1)->get();
}

function getUserphone($userId)
{
    return Client::where('id', $userId)->first()->phone;
}

function getUsername_($userId)
{
    return Client::where('id', $userId)->first()->first_name;
}

function getUsername()
{
    return Client::where('id', auth('client')->user()->id)->first()->first_name;
}

function getUsercountry()
{
    return Country::where('id', auth('client')->user()->country_id)->first()->name_en;
}

function gettwitter()
{
    return setting('twitter');
}
function getinstagram()
{
    return setting('instagram');
}
function getfacebook()
{
    return setting('facebook');
}
function getsnapchat()
{
    return setting('snapchat');
}

function lang()
{
    return app()->getlocale();
}

function hasSizeAndColor($product_id)
{
    return SizeProducts::where('product_id', $product_id)->where('quantity', '>' , 0)->count() > 0;
}
