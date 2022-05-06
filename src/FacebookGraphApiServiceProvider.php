<?php

namespace Plugrbase\FacebookGraphApi;

use Illuminate\Support\ServiceProvider;

class FacebookGraphApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('facebook-graph-api.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'facebook-graph-api');

        // Register the main class to use with the facade
        $this->app->singleton('facebook-graph-api', function () {
            return new FacebookGraphApi();
        });
    }
}
