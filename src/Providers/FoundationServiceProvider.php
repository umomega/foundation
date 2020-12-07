<?php

namespace Umomega\Foundation\Providers;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once(__DIR__ . '/../Support/helpers.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/foundation')], 'views');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'foundation');

        $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/foundation')], 'lang');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'foundation');

        $this->loadMigrationsFrom(__DIR__ . '/../../migrations');
    }

}
