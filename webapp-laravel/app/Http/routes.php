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

/*
| Views
*/
Route::get('/', 'WelcomeController@index');
Route::get('index', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('login', 'LoginController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('listing', 'projectController@index');
Route::get('auth/registerTwo', 'signUpController@index');
Route::resource('ngo', 'ngoController');
Route::resource('projects', 'projectDetailController');


/*
| Restful WebServices
*/
Route::resource('searchProject', 'RestSearchProjectController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
