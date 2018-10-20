<?php

namespace Elegant\Admin;

use View;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        Console\InstallCommand::class,
    ];

    /**
     * @var array
     */
    protected $viewComposers = [
        'admin::panel.partials.notifications-menu' => ViewComposers\NotificationsMenuComposer::class
    ];

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

        $this->registerViewComposers();
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

        if ($this->app->runningInConsole()) {
            $this->registerConsole();
        }
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

    /**
     * Register view composers.
     *
     * @return void
     */
    protected function registerViewComposers()
    {
        foreach ($this->viewComposers as $key => $composer) {
            View::composer($key, $composer);
        }
    }

    /**
     * Register console related dependencies.
     *
     * @return void
     */
    protected function registerConsole()
    {
        $this->registerPublishableResources();
        $this->registerConsoleCommands();
    }

    /**
     * Register console commands.
     *
     * @return void
     */
    protected function registerConsoleCommands()
    {
        $this->commands($this->commands);
    }

    /**
     * Register the publishable resources.
     *
     * @return void
     */
    protected function registerPublishableResources()
    {
        $this->publishes([__DIR__.'/../config' => config_path()], 'laravel-admin-config');
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/admin'),], 'laravel-admin-views');
        $this->publishes([__DIR__.'/../public' => public_path('vendor/admin')], 'laravel-admin-public');
    }
}
