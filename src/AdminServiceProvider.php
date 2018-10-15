<?php

namespace Elegant\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $routeMiddleware = [
        'admin.auth' => Middleware\Authenticate::class,
        'admin.guest' => Middleware\RedirectIfAuthenticated::class,
    ];

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'admin');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config' => config_path()], 'laravel-admin-config');
            $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/admin'),], 'laravel-admin-views');
            $this->publishes([__DIR__.'/../public' => public_path('vendor/admin')], 'laravel-admin-public');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/admin.php', 'admin');

        $this->registerRouteMiddleware();
    }

    /**
     * Register the route middleware.
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }
    }
}
