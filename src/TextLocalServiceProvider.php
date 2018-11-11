<?php

namespace App\TextLocal;

use Illuminate\Support\ServiceProvider;

class TextLocalServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(__DIR__ . '/../config/textlocal.php', 'textlocal');

        // Register the service the package provides.
        $this->app->singleton('textlocal', function ($app) {
            return new TextLocal;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return ['textlocal'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole() {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/textlocal.php' => config_path('textlocal.php'),
                ], 'textlocal.config');
    }

}
