<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index()
	{
		$categories = Post::getCategories();
		$lastPosts = Post::lastPosts();
		$allPosts = Post::allPosts();
		$popularPosts = Post::popularPosts();

		return View::make('index')->with('results',['categories' => $categories, 'lastPosts' => $lastPosts, 'allPosts' => $allPosts, 'popularPosts' => $popularPosts]);

	}

	

}