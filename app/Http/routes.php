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
use Auth;

Route::get('/', function() {
  return view('master');
});

Route::group(array('prefix'=>'/api'),function(){
  // Authentication & registration routes
  Route::post('/auth/login','Auth\AuthController@postLogin');
  Route::get('/auth/logout','Auth\AuthController@getLogout');
  Route::post('/auth/register','Auth\AuthController@PostRegister');

  // Domains
  Route::post('/domains','DomainController@index');

  // Profiles
  Route::post('/profiles','ProfileController@index');
  Route::post('/profiles/answers','ProfileController@saveAnswers');
  Route::post('/profiles/answered','ProfileController@answeredProfiles');

  // Concepts
  Route::post('/concepts','ConceptController@getConcepts');
  Route::post('/concepts/addAssociations', 'ConceptController@saveAssociations');

  // Score
  Route::post('/score','ScoreController@getScore');
});
