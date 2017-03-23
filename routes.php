<?php

\Route::group([
    'prefix' => 'lavacharts',
    'namespace' => '\Khill\Lavacharts\Laravel\Showcase',
], function() {
    \Route::get('/', 'LavachartsShowcaseController@welcome');
    \Route::get('/demos', 'LavachartsShowcaseController@demos');
    \Route::get('/example/chart/{type}', 'LavachartsShowcaseController@showChart');
    \Route::get('/example/dashboard/{type}', 'LavachartsShowcaseController@showDashboard');
});
