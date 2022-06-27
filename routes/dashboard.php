<?php

use App\Http\Controllers\Dashboard\ReportController;
use Illuminate\Support\Facades\Route;

Route::any('adminlogin', 'AuthController@login')->name('dashboard.login');

Route::middleware('adminAuth')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::post('logout', 'AuthController@logout')->name('dashboard.logout');

    // Route::post('agents/switch', 'AgentController@switch')->name('agents.switch');

    Route::post('colors/switch', 'ColorController@switch')->name('colors.switch');

    Route::post('sizes/switch', 'SizeController@switch')->name('sizes.switch');

    Route::post('categories/switch', 'CategoryController@switch')->name('categories.switch');
    Route::post('categories/category/products', 'CategoryController@products')->name('categories.products');

    Route::post('products/switch', 'ProductController@switch')->name('products.switch');
    Route::get('products/{product}/comments', 'ProductController@comments')->name('products.comments');
    Route::delete('products/{product}/comments/{review}', 'ProductController@destroyReview')->name('products.destroyReview');
    Route::delete('products/images/{id}', 'ProductController@destroyImage')->name('products.destroyImage');

    Route::post('countries/switch', 'CountryController@switch')->name('countries.switch');

    Route::post('clients/switch', 'ClientController@switch')->name('clients.switch');

    Route::resource('addresses', 'AddressController')->except(['index']);
    Route::post('addresses/switch', 'AddressController@switch')->name('addresses.switch');

    Route::get('new-orders', 'OrderController@new')->name('orders.new');
    Route::get('declined-orders', 'OrderController@declined')->name('orders.declined');
    Route::get('current-orders', 'OrderController@current')->name('orders.current');
    Route::get('previous-orders', 'OrderController@previous')->name('orders.previous');
    Route::get('orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
    Route::put('orders', 'OrderController@update')->name('orders.update');
    Route::delete('orders/{id}', 'OrderController@destroy')->name('orders.destroy');
    Route::post('orders/add-product', 'OrderController@addProduct')->name('orders.addProduct');
    Route::delete('orders/{id}/delete-product', 'OrderController@deleteProduct')->name('orders.deleteProduct');

    Route::get('reports/financial', 'ReportController@financial')->name('reports.financial');
    Route::get('reports/client', 'ReportController@client')->name('reports.client');
    Route::get('reports/payment', 'ReportController@payment')->name('reports.payment');

    Route::resource('sliders', 'SliderController')->except(['show', 'edit', 'update']);
    Route::post('sliders/switch', 'SliderController@switch')->name('sliders.switch');

    Route::resource('testimonials', 'TestimonialController')->except(['show']);
    Route::post('testimonials/switch', 'TestimonialController@switch')->name('testimonials.switch');

    Route::get('transport/index/{order_id}', 'TransportController@index')->name('transport.index');
    Route::post('transport/stepOne', 'TransportController@stepOne')->name('transport.stepOne');
    Route::post('transport/stepTwo', 'TransportController@stepTwo')->name('transport.stepTwo');
    Route::post('transport/send', 'TransportController@send')->name('transport.send');

    Route::resource('regions', 'RegionController')->except(['show']);
    Route::post('regions/switch', 'RegionController@switch')->name('regions.switch');

    Route::resource('currencies', 'CurrencyController')->except(['show']);
    Route::post('currencies/switch', 'CurrencyController@switch')->name('currencies.switch');

    Route::resource('paymentMethods', 'PaymentController')->except(['show']);
    Route::post('paymentMethods/switch', 'PaymentController@switch')->name('paymentMethods.switch');

    Route::resource('faq', 'FAQController')->except(['show']);
    Route::post('faq/switch', 'FAQController@switch')->name('faq.switch');

    Route::get('settings/{type}', 'SettingController@index')->name('settings.index');
    Route::put('settings/{type}/update', 'SettingController@update')->name('settings.update');
    Route::get('messages', 'SettingController@messages')->name('settings.messages');
    Route::delete('messages/{id}', 'SettingController@destroyMessage')->name('settings.destroyMessage');



    Route::resource('couponecode', 'CouponController');
    Route::post('couponecode/switch', 'CouponController@switch')->name('couponecode.switch');

    Route::resources([
        'categories' => 'CategoryController',
        // 'agents' => 'AgentController',
        'products' => 'ProductController',
        'clients' => 'ClientController',
        'countries' => 'CountryController',
        'colors' => 'ColorController',
        'sizes' => 'SizeController',
        'weights' => 'WeightController',
    ]);

    Route::Get('exportData', [ReportController::class, 'exportData'])->name('exportData');
});
