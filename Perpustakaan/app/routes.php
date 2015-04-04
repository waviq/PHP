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


Route::get('/', 'HomeController@logout');

Route::group(
    array('before' => 'auth'), function ()
{
    Route::get('dashboard', 'HomeController@dashboard');
    Route::group(
        array('prefix' => 'admin', 'before' => 'admin'), function ()
    {
        Route::resource('authors', 'AuthorsController');
    });
});

Route::get('/guest', function ()
{
    return View::make('guest.index');
});


Route::get('login', array('guest.login',
    'uses' => 'GuestController@login'));

Route::post('authenticate', 'HomeController@authenticate');

Route::get('logout', 'HomeController@logout');

