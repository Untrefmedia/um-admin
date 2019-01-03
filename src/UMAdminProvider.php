<?php

namespace Untrefmedia\UMAdmin;

use Illuminate\Support\ServiceProvider;

class UMAdminProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/um-admin.php' => config_path('um-admin.php'),
            __DIR__ . '/config/adminlte.php' => config_path('adminlte.php')
        ], 'config');

        $this->publishes([
            __DIR__ . '/../publish/public/' => public_path()
        ], 'public');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        require __DIR__ . '/routes/web.php';
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'umadmin');

    }
}
