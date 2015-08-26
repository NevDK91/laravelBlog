<?php

class Post extends Eloquent {

	protected $table = 'posts';
	public $timestamps = false;
	public $fillable = array("id", "author_id", "category_id", "title", "body", "created_at", "img", "tags");

	//protected $hidden = array('password', 'remember_token');

	/*public function setPasswordAttribute($pass){
		$this->attributes['password'] = Hash::make($pass);
	}*/

	public static function getCategories(){
		return DB::table('categories')->select('name')->get();
	}

	public static function lastPosts(){
		return DB::table('posts')->orderBy('id', "DESC")->limit(6)->get();
	}

	public static function allPosts(){
		return DB::table('posts')->orderBy('id', "DESC")->get();
	}

	public static function popularPosts(){
		return DB::table('posts')->orderBy('views', "DESC")->limit(6)->get();
	}


}
