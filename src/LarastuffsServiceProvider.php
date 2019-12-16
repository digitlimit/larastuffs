<?php

namespace Digitlimit\Larastuffs;

use Illuminate\Support\ServiceProvider;

class LarastuffsServiceProvider extends ServiceProvider
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
        //load web routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        //load API routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        //set view path
        $this->loadViewsFrom(__DIR__.'/resources/views', 'larastuffs');
    }
}
