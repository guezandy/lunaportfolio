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
    return view('welcome');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('home', 'HomeController@index');

Route::any('/edit', 'HomeController@edit');

Route::any('/updateAboutMe', 'UpdateController@updateAboutMe');

Route::any('/updateContact', 'UpdateController@updateContact');

Route::any('/updateSocialMedia', 'UpdateController@updateSocialMedia');

Route::any('/updateHome', 'UpdateController@updateHome');

Route::any('/updateSkill/{id}', 'UpdateController@updateSkill');

Route::any('/addSkill', 'UpdateController@addSkill');

Route::any('/deleteSkill/{id}', 'UpdateController@deleteSkill');

Route::any('/updateQuote/{id}', 'UpdateController@updateQuote');

Route::any('/addQuote', 'UpdateController@addQuote');

Route::any('/deleteQuote/{id}', 'UpdateController@deleteQuote');

Route::any('/updateSkillSlider/{id}', 'UpdateController@updateSkillSlider');

Route::any('/addSkillSlider', 'UpdateController@addSkillSlider');

Route::any('/deleteSkillSlider/{id}', 'UpdateController@deleteSkillSlider');

Route::any('/updatePortfolioPiece/{id}', 'UpdateController@updatePortfolioPiece');

Route::any('/addPortfolioPiece', 'UpdateController@addPortfolioPiece');

Route::any('/deletePortfolioPiece/{id}', 'UpdateController@deletePortfolioPiece');

Route::any('/android_ping', 'AndroidController@ping');
