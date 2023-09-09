<?php

namespace Khairul\Fm;

use Illuminate\Support\ServiceProvider;
use Khairul\Fm\TaskController;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void 
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'fm');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(TaskController::class);

        $this->publishes([
            __DIR__.'/views' => resource_path('views/khairul/fm'),
        ], 'views');

        //php artisan vendor:publish --tag=views

        $this->publishes([
            __DIR__.'/Task.php' => app_path('Models/Task.php'),
        ], 'task-model');

        //php artisan vendor:publish --tag=task-model

        $this->publishes([
            __DIR__.'/migrations/' => database_path('migrations'),
             //__DIR__ . '/migrations/' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_task_table.php'),
            // you can add any number of migrations here

        ], 'migrations');
        //php artisan vendor:publish --tag=migrations
    }
}