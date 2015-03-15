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

Route::get('/test', 'HomeController@test');

Route::get('index', array('as' => 'index', 'uses' => 'AuthController@guest'));

Route::get('/cek', 'HomeController@cek');

Route::get('/', function (){
    return View::make('guest.index');
});

Route::get('/dashboard', 'HomeController@dashboard');


