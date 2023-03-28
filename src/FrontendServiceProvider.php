<?php

namespace QRFeedz\Frontend;

use Brunocfalcao\Cerebrus\Cerebrus;
use Brunocfalcao\Tracer\Middleware\VisitTracing;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use QRFeedz\Frontend\Middleware\CheckQuestionnaire;

class FrontendServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->overrideResources();
        $this->loadViews();
        $this->loadRoutes();
        $this->registerBladeComponents();
        $this->registerMiddleware();
    }

    public function register(): void
    {
        $this->app->bind('frontend-cerebrus', function ($app) {
            /**
             * On this case we are using a specific Cerebrus object without
             * a "path" parameter, because this bind is just used as a
             * Cerebrus Facade to be used in the blade templates, as
             *
             * $survey = Cerebrus::get('questionnaire');
             */
            return new Cerebrus();
        });
    }

    protected function registerMiddleware()
    {
        $this->app['router']
             ->aliasMiddleware('check-questionnaire', CheckQuestionnaire::class);
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'qrfeedz');
    }

    protected function loadRoutes(): void
    {
        $routesPath = __DIR__.'/../routes/' . app()->environment() .'.php';

        Route::middleware([
            'web',
            VisitTracing::class,
        ])
         ->group(function () use ($routesPath) {
             include $routesPath;
         });
    }

    protected function overrideResources(): void
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ]);
    }

    protected function registerBladeComponents()
    {
        Blade::componentNamespace('QRFeedz\\Frontend\\Views\\Components', 'qrfeedz');
    }
}
