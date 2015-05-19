<?php

/*Home Page*/
Route::get('/', 'PagesController@home');

Route::resource('pemberitahuan','PemberitahuanController');


/*Authentifikasi*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
