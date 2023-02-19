<?php

namespace QRFeedz\Frontend;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use QRFeedz\Frontend\Commands\ResetFrontend;

class FrontendServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->overrideResources();
        $this->registerCommands();
        $this->loadViews();
        $this->loadRoutes();
    }

    public function register(): void
    {
        //
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'qrfeedz');
    }

    protected function loadRoutes(): void
    {
        $routesPath = __DIR__.'/../routes/frontend.php';

        Route::middleware([
            'web',
            //IpTracing::class,
            //VisitTracing::class,
            //GoalsTracing::class,
        ])
         ->group(function () use ($routesPath) {
             include $routesPath;
         });
    }

    protected function registerCommands(): void
    {
        $this->commands([
            ResetFrontend::class
        ]);
    }

    protected function overrideResources():void
    {
        $this->publishes([
            __DIR__ . '/../resources/overrides/' => base_path('/'),
        ]);
    }
}
