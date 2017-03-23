<?php

namespace Khill\Lavacharts\Laravel\Showcase;

use \Illuminate\Support\ServiceProvider;

class LavachartsShowcaseServiceProvider extends ServiceProvider
{
    const ROUTES = __DIR__.'/../routes.php';

    const VIEWS = __DIR__.'/../views';

    public function boot()
    {
        if (method_exists($this, 'loadRoutesFrom')) {
            $this->loadRoutesFrom(self::ROUTES);
        } else {
            require self::ROUTES;
        }

        $this->loadViewsFrom(self::VIEWS, 'lavacharts');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/khill/lavacharts/laravel-showcase'),
        ], 'public');

        \View::composer('*', function ($view) {
            return $view->with('versions', [
                'laravel'    => app()::VERSION,
                'lavacharts' => app('lavacharts')::VERSION,
            ]);
        });
    }

    public function register()
    {
        //
    }
}
