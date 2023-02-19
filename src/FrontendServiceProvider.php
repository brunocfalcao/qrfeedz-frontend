<?php

namespace QRFeedz\Frontend;

use Illuminate\Support\ServiceProvider;
use QRFeedz\Frontend\Commands\Install;

class FrontendServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'qrfeedz');

        if (! $this->app->runningInConsole()) {
            $this->loadRoutes();
            $this->registerBladeComponents();
        }
    }

    public function register(): void
    {
        //
    }

    protected function loadRoutes()
    {
        $routesPath = __DIR__.'/../routes/frontend.php';

        Route::middleware([
            'web',
            IpTracing::class,
            VisitTracing::class,
            GoalsTracing::class,
        ])
         ->group(function () use ($routesPath) {
             include $routesPath;
         });
    }
}
