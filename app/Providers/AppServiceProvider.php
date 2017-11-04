<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use KPAHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('welcome', function($view)
        {
             $view->with('app', KPAHelper::getConfigApp());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
