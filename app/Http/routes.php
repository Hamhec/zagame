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

Route::get('/', function() {
  return view('master');
});

Route::get('login','DomainController@index');

Route::group(array('prefix'=>'/api'),function(){
  // Authentication & registration routes
  //Route::post('/auth/login','Auth\AuthController@postLogin');
  //Route::get('/auth/login','DomainController@index');
  Route::get('/auth/logout','Auth\AuthController@getLogout');
  Route::post('/auth/register','Auth\AuthController@PostRegister');

});
