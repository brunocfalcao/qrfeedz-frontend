<?php

namespace QRFeedz\Frontend;

use Brunocfalcao\Cerebrus\Cerebrus;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use QRFeedz\Foundation\Abstracts\QRFeedzServiceProvider;
use QRFeedz\Frontend\Middleware\PersistLocale;
use QRFeedz\Frontend\Middleware\ValidateQRCode;
use QRFeedz\Frontend\Middleware\ValidateSessionUuid;

class FrontendServiceProvider extends QRFeedzServiceProvider
{
    public function boot()
    {
        $this->loadViews();
        $this->overrideResources();
        $this->registerAnonymousBladeComponents();
        $this->registerMiddlewareAliases();
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

    protected function registerMiddlewareAliases()
    {
        Route::aliasMiddleware(
            'persist-locale',
            PersistLocale::class
        );

        Route::aliasMiddleware(
            'validate-qrcode',
            ValidateQRCode::class
        );

        Route::aliasMiddleware(
            'validate-session-uuid',
            ValidateSessionUuid::class
        );
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'qrfeedz-frontend'
        );
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
