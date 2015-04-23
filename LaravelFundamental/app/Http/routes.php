<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('kontak','KontakController@index');
Route::get('about','PageAboutController@index');

Route::resource('artikel','ArtikelController');






/*

    Route::get('artikel','ArtikelController@index');
    Route::get('artikel/create','ArtikelController@create');
    Route::get('artikel/{id}','ArtikelController@show');
    Route::post('artikel','ArtikelController@store');
*/