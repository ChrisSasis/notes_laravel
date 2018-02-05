<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'auth'], function() {
	// create notes
	Route::get('/notes', 'NotesController@create');
	Route::post('/notes', 'NotesController@store');
	Route::get('/notes/update/{id}', 'NotesController@edit');
	Route::put('/notes/{id}', 'NotesController@update');
	Route::delete('/notes/{id}', 'NotesController@destroy');
	// tags
	Route::get('/tags', 'TagsController@create');
	Route::post('/tags', 'TagsController@store');

	// Profile
	Route::get('/profile', 'UserController@index');
	Route::get('/settings/update/{id}', 'UserController@edit');
	Route::put('/settings/{id}', 'UserController@update');

	// admin
	Route::get('/4dM1N', 'AdminController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');