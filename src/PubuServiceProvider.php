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
        //发布配置文件
        $this->publishes([__DIR__.'/config/pubu.php' => config_path('pubu.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //合并config文件
        $configPath = __DIR__ . '/config/pubu.php';
        $this->mergeConfigFrom($configPath, 'pubu');

        $this->app->singleton('pubu', function(){
            return new LaravelPubu();
        });
    }

}
