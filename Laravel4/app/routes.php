<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/about', function () {
    return '<h1>Halo</h1>'
            . 'Selamat Datang di web aplikasi saya <br>'
            . 'Laravel emank keren.';
});

Route::get('/testModel', function () {

    $name = DB::table('customers')->where('nama', 'waviq')->pluck('nama');
    return $name;
});
