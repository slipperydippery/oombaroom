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
Route::get('/userprofile', ['as' => 'users.userprofile', 'uses' => 'UserController@userprofile']);
Route::resource('acts', 'ActController');
Route::get('/acts/{act}/media', ['as' => 'acts.media', 'uses' => 'ActController@media']);
Route::resource('scenes', 'SceneController');
Route::resource('locks', 'LockController');
Route::resource('groups', 'GroupController');
Route::resource('funerals', 'FuneralController');