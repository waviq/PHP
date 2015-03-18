<?php

Route::get('/', 'HomeController@showWelcome');
Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('admin', function (){
    return 'admin page';
})->before('auth');//biar yg udh login aja yg bisa masuk admin page
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
//cek d php artisan route, untuk melihat parameter apa aja d resource
Route::resource('karyawan', 'KaryawanController');






//Route::resource('karyawan', $controller)


//Route::get('karyawan', 'KaryawanController@index');
//Route::get('karyawan/{nama}','KaryawanController@tampilkanDetailKaryawan');
//Route::get('customers', 'CustomersController@tampilkan');

//contoh penggunaaan resource, tanpa embel2 '@', 
//cek d php artisan route, untuk melihat fungsi apa aja yg udh auto create
Route::resource('customers', 'CustomersController');

