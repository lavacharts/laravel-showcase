<?php

use \Khill\Lavacharts\Lavacharts;

\Route::group(['prefix' => 'lavacharts'], function() {

    \Route::get('/', function () {
        return view('lavacharts::welcome', [
            'laravel_version' => app()::VERSION,
            'lavacharts_version' => Lavacharts::VERSION
        ]);
    });

});
