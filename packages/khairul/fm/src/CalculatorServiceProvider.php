<?php

namespace Khairul\Fm;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Khairul\Fm\CalculatorController');
        //$this->loadViewsFrom(__DIR__.'/views', 'fm');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'courier');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}