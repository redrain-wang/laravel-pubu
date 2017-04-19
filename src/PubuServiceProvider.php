<?php

namespace Redrain\Pubu;

use Illuminate\Support\ServiceProvider;
class PubuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('pubu', function(){
            return new LaravelPubu();
        });
    }
}
