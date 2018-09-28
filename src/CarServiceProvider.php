<?php

namespace Vinsofts\Car;

use Illuminate\Support\ServiceProvider;

class CarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        include __DIR__.'/model/Product2.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
       $this->app->make('Vinsofts\Car\CarController');
       $this->loadViewsFrom(__DIR__.'/view', 'car');
    
    }
}
