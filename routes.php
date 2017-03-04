<?php

\Route::group(['prefix' => 'lavacharts'], function() {

    \Route::get('/', function () {
        return view('lavacharts::welcome');
    });

});
