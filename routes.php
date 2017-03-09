<?php

\Route::group([
    'prefix' => 'lavacharts',
    'namespace' => '\Khill\Lavacharts\Laravel\Showcase',
], function() {

    \Route::get('/', function() {
        return \View::make('lavacharts::welcome');
    });

    \Route::get('/demos', function() {
        return \View::make('lavacharts::demos');
    });

    \Route::get('/example/chart/{type}', 'LavachartsShowcaseController@showChart');
    \Route::get('/example/dashboard/{type}', 'LavachartsShowcaseController@showDashboard');

});
