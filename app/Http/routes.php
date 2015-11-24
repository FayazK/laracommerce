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
// Our home
Route::get('/', function () {
    return view('backend');
});
Route::get('/home', function () {
    return view('admin');
});

// The back-end area
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','role:admin']], function () {
    Route::get('/','AdminController@index');
    Route::get('/home','AdminController@index');
    Route::post('settings/save','AdminController@save');
    Route::get('/settings/{type?}','AdminController@settings');
    Route::get('/users','UsersController@index');
    Route::get('/users/edit/{id}','UsersController@edit');
    Route::get('/users/delete/{id}','UsersController@delete');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');