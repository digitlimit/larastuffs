<?php

namespace Digitlimit\Larastuffs\App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Digitlimit\Larastuffs\App\Models\Post::observe(\Digitlimit\Larastuffs\App\Observers\PostObserver::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}