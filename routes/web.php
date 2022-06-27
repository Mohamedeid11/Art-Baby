<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::POST('signup', 'AuthController@reg')->name('auth.reg');
Route::POST('login', 'AuthController@postLogin')->name('auth.login');


Route::GET('web-login', 'AuthController@login')->name('login');
Route::GET('sign-up', 'AuthController@register')->name('auth.register');

Route::view('web-resetpass', 'website.auth.forgetpass')->name('resetpassord');
Route::GET('resetpass', 'AuthController@resetpass')->name('resetpass');

Route::get('/', 'HomeController@index')->name('home');
Route::get('brands', 'HomeController@brands')->name('brands');
Route::get('categories', 'HomeController@categories')->name('categories');
Route::delete('categories', 'HomeController@categories_delete')->name('categories_delete');
Route::get('category/{category}', 'HomeController@category')->name('category');
Route::any('searchBrands', 'HomeController@searchBrands')->name('searchBrands');
Route::any('searchCategories', 'HomeController@searchCategories')->name('searchCategories');
Route::any('search', 'HomeController@search')->name('search');
Route::any('products', 'HomeController@products')->name('products');
Route::any('testimonials', 'HomeController@testimonials')->name('testimonials');
Route::any('recipes', 'HomeController@recipes')->name('recipes');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('leaveMessage', 'HomeController@leaveMessage')->name('leaveMessage');
Route::get('return-refund-policy', 'HomeController@returnRefundPolicy')->name('returnRefundPolicy');
Route::get('terms-conditions', 'HomeController@termsConditions')->name('termsConditions');
Route::get('faq', 'HomeController@faq')->name('faq');
Route::post('follow', 'HomeController@follow')->name('follow');

Route::get('products/{id}', 'ProductController@show')->name('product.show');
Route::get('products/{product}/reviews', 'ProductController@reviews')->name('product.reviews');
Route::get('getsizequantity', 'ProductController@getsizequantity')->name('getsizequantity');



Route::get('forget-password', 'AuthController@forgetPassword')->name('auth.forgetPassword');
Route::post('addToCart', 'CartController@store')->name('cart.store');
Route::get('cart/confirm/{id}', 'CartController@confirm')->name('cart.confirm');

Route::get('cart', 'CartController@index')->name('cart.index');
Route::get('cart/save', 'CartController@save')->name('cart.save');
Route::delete('cart', 'CartController@destroy')->name('cart.destroy');
Route::POST('addcouponcode', 'CartController@addCoupon')->name('addcouponcode');
Route::POST('cashchange', 'CartController@cashchange')->name('cash.change');

Route::group(['middleware' => 'client'], function () {
    Route::get('profile', 'AuthController@profile')->name('auth.profile');
    Route::put('profile', 'AuthController@update')->name('auth.update');

    Route::post('cart/confirm/{id}', 'CartController@postConfirm')->name('cart.postconfirm');
    Route::resource('cart/address', 'AddressController')->except(['show']);

    Route::post('logout', 'AuthController@logout')->name('auth.logout');

    Route::post('favorite', 'FavoriteController@switch')->name('favorite');
    Route::post('review', 'ReviewController@store')->name('review');

});


Route::group(['prefix' => 'payment'], function () {
    Route::get('init', 'BankPaymentController@init')->name('payment.init');
    Route::any('response', 'BankPaymentController@response')->name('payment.response');
    Route::any('error', 'BankPaymentController@error')->name('payment.error');
    Route::any('success', 'BankPaymentController@success')->name('payment.success');
    Route::any('failed', 'BankPaymentController@failed')->name('payment.failed');
    Route::any('decline', 'BankPaymentController@decline')->name('payment.decline');

    Route::get('credit/response', 'BankPaymentController@creditResponse');
    Route::get('credit', 'BankPaymentController@creditInit');
});

Route::get('getDeliveryCharge', 'HomeController@getDeliveryCharge');
Route::get('lang/{locale}', 'HomeController@lang')->name('lang');
Route::get('currency/{currency}', 'HomeController@currency')->name('currency');

