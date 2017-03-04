<?php

namespace Khill\Lavacharts\Laravel\Showcase;

use \Illuminate\Support\ServiceProvider;

class LavachartsShowcaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');

        $this->loadViewsFrom(__DIR__.'/../views', 'lavacharts');
    }

    public function register()
    {
        //
    }
}
