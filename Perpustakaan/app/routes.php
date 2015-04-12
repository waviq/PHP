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


Route::get('/', 'GuestController@index');

Route::get('datatable/books/borrow', array('as'=>'datatable.books.borrow','uses'=>'BooksController@borrowDatatable'));
Route::group(array('before' => 'auth'), function ()
{
    Route::get('dashboard', 'HomeController@dashboard');
    Route::get('books',array('as'=>'member.books','uses'=>'MemberController@books'));
    Route::get('books/{book}/borrow',array('as'=>'books.borrow','uses'=>'BooksController@borrow'));
    
    Route::group(array('prefix' => 'admin', 'before' => 'admin'), function ()
    {
        Route::resource('authors', 'AuthorsController');
        Route::resource('books','BooksController');
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

