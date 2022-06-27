<?php

namespace App\Providers;

use App\Models\Currency;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if ($this->app->environment('production')) {
        //     \URL::forceScheme('https');
        // }

        $currencyValue  =  \App\Models\Currency::where('name_' . app()->getLocale(),session()->get('currency'))->value('value') ?? \App\Models\Currency::value('value');

        $getcurrency  = session()->get('currency') ?? \App\Models\Currency::where('value', $currencyValue)->first();

        $currencyName = $getcurrency['name_' . app()->getLocale()];

        $settings  = Setting::get()->keyBy('key');
        foreach ($settings as $key => $item){
            $settings[$key] = $item->value ;
        };

        View::share(['currencyValue' => $currencyValue , 'settings' => $settings ,'currencyName' => $currencyName , ] );


        Schema::defaultStringLength(191);
    }
}
