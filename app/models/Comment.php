<?php

class Comment extends Eloquent {

	protected $table = 'comments';
	public $timestamps = false;
	public $fillable = array("id", "id_post", "id_user", "body", "created_at");

	//protected $hidden = array('password', 'remember_token');

	/*public function setPasswordAttribute($pass){
		$this->attributes['password'] = Hash::make($pass);
	}*/

}
