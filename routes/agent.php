<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'agent'], function () {
    Route::post('logout', 'HomeController@logout')->name('agent.logout');
    Route::get('/', 'HomeController@index')->name('agent');
    Route::post('agent-products/switch', 'AgentProductController@switch')
        ->name('agent-products.switch');
    Route::get('agent-products/{product}/comments', 'AgentProductController@comments')
        ->name('agent-products.comments');
    Route::delete('agent-products/{product}/comments/{review}', 'AgentProductController@destroyReview')
        ->name('agent-products.destroyReview');
    Route::delete('agent-products/images/{id}', 'AgentProductController@destroyImage')
        ->name('agent-products.destroyImage');
    Route::resources([
        'agent-products' => 'AgentProductController',
    ]);
});
