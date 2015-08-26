<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	public $timestamps = false;
	public $fillable = array("id", "name", "email", "password", "rememberToken", "avatar", "fio", "about", "confirmation_code", "confirmed");

	protected $hidden = array('password', 'remember_token');


}
