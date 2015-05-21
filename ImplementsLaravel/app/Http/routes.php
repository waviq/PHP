<?php

/*Home Page*/
Route::get('/', 'PagesController@home');

Route::resource('pemberitahuan','PemberitahuanController');

Route::get('pemberitahuan/create/confirm','PemberitahuanController@confirm');



/*Authentifikasi*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


