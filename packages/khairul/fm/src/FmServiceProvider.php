<?php
namespace Khairul\Fm;
use Illuminate\Support\ServiceProvider;

class FmServiceProvider extends ServiceProvider {
    
    public function boot() {
        //dd("Its Work...");
    }

    public function register() {
        $this->app->singleton(Fm::class, function(){
            return new Fm();
        });
    }
}