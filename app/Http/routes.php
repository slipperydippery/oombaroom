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


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');
Route::get('/users/user', ['as' => 'users.user', 'uses' => 'UserController@show']);
Route::resource('acts', 'ActController');
Route::resource('scenes', 'SceneController');
Route::resource('locks', 'LockController');
Route::resource('groups', 'GroupController');
Route::resource('funerals', 'FuneralController');