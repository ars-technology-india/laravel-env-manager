<?php
namespace AshokDevatwal\EnvManager;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class EnvManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'envmanager');

        $this->publishes([
            __DIR__.'/config/envmanager.php' => config_path('envmanager.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/envmanager.php', 'envmanager');
    }
}