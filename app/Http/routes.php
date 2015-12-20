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
Route::get('/acts/{acts}/media', ['as' => 'acts.media', 'uses' => 'ActController@media']);
Route::get('/acts/addscene/{acts}/{scenes}', ['as' => 'acts.addscene', 'uses' => 'ActController@addscene']);
Route::get('/acts/removescene/{acts}/{scenes}', ['as' => 'acts.removescene', 'uses' => 'ActController@removescene']);
Route::resource('scenes', 'SceneController');
Route::resource('locks', 'LockController');
Route::resource('groups', 'GroupController');
Route::resource('users.funerals', 'FuneralController');
Route::resource('users.guests', 'GuestController');
Route::resource('users.speeches', 'SpeechController');