<?php

namespace Elegant\Admin;

use Illuminate\Support\Facades\View;
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
        'admin::partials.notifications-menu' => Http\View\Composers\NotificationsMenuComposer::class
    ];

    /**
     * @var array
     */
    protected $routeMiddleware = [
        'admin.auth' => Http\Middleware\Authenticate::class,
        'admin.guest' => Http\Middleware\RedirectIfAuthenticated::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'admin');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->registerViewComposers();

        $this->registerRouteMiddleware();

        if ($this->app->runningInConsole()) {
            $this->bootConsole();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/admin.php', 'admin');
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
     * Bootstrap console related services.
     *
     * @return void
     */
    protected function bootConsole()
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
