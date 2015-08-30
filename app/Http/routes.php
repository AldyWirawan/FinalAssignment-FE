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

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('datahistoris/dataTable', 'DataController@historisTable');
Route::get('sma/dataTable', 'DataController@smaTable');
Route::get('tweet/dataTable', 'DataController@tweetTable');
Route::get('sentianal/dataTable', 'DataController@sentianalTable');
Route::get('param/dataTable', 'DataController@paramTable');
Route::get('svm/dataTable', 'DataController@svmTable');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);