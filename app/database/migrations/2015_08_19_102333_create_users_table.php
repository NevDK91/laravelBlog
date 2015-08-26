<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create("users", function($table){
			$table->increments("id");
			$table->string("name", 30)->unique();
			$table->string("email", 30)->unique();
			$table->string("password", 255)->unique();
			$table->rememberToken();
			$table->text('avatar');
			$table->text('fio');
			$table->text('about');
			$table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("users");
	}

}
