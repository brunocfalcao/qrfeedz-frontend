<?php

namespace QRFeedz\Frontend;

use Brunocfalcao\Cerebrus\Cerebrus;
use Brunocfalcao\Tracer\Middleware\VisitTracing;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use QRFeedz\Foundation\Abstracts\QRFeedzServiceProvider;
use QRFeedz\Frontend\Middleware\CheckQuestionnaire;

class FrontendServiceProvider extends QRFeedzServiceProvider
{
    public function boot()
    {
        $this->loadViews();
        $this->loadRoutes();
        $this->overrideResources();
        $this->registerAnonymousBladeComponents();
    }

    public function register()
    {
        $this->app->bind('frontend-cerebrus', function ($app) {
            /**
             * On this case we are using a specific Cerebrus object without
             * a "path" parameter, because this bind is just used as a
             * Cerebrus Facade to be used in the blade templates, as:
             *
             * $survey = CerebrusFacade::get('questionnaire');
             */
            return new Cerebrus();
        });
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'qrfeedz-frontend'
        );
    }

    protected function loadRoutes()
    {
        // Load routes from the respective environment type.
        $routesPath = __DIR__.'/../routes/'.app()->environment().'.php';

        // Load default frontend routes.
        $defaultPath = __DIR__.'/../routes/frontend.php';

        Route::middleware([
            'web',
            VisitTracing::class,
            CheckQuestionnaire::class,
        ])
            ->group(function () use ($routesPath) {
                include $routesPath;
            });

        /**
         * Include the default frontend routes. They are included no matter
         * what environment we are currently on.
         */
        Route::middleware([
            'web',
            VisitTracing::class,
        ])
            ->group(function () use ($defaultPath) {
                include $defaultPath;
            });
    }

    protected function overrideResources()
    {
        $this->publishes([
            __DIR__.'/../resources/overrides/' => base_path('/'),
        ], 'qrfeedz-frontend-overrides');
    }

    protected function registerAnonymousBladeComponents()
    {
        Blade::anonymousComponentPath(
            __DIR__.'/../resources/views',
            'qrfeedz'
        );
    }
}
