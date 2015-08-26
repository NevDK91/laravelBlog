<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", [ "as" => "index", "uses" => "HomeController@index"]);

Route::get("signOut", array("before" => "auth", "as" => "doSignOut", "uses" => "UsersController@doSignOut") );

Route::group(["before" => "guest"], function(){


	Route::get("signUp", array("as" => "formSignUp", "uses" => "UsersController@formSignUp") );

	Route::get("signIn", array("as" => "formSignIn", "uses" => "UsersController@formSignIn") );

	Route::get("register/verify/{confirm_code}", array("as" => "verifyPath", "uses" => "UsersController@regVerify") );

	Route::post("signIn", [

		"as" => "doSignIn",
		"uses" => "UsersController@doSignIn",
		"before" => "csrf"
	]);

	Route::post("signUp", [

		"as" => "doSignUp",
		"uses" => "UsersController@doSignUp",
		"before" => "csrf"
	]);


});
