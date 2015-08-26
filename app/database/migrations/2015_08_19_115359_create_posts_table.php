<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create("posts", function($table){
			$table->increments("id");
			$table->integer("author_id");
			$table->integer("category_id");
			$table->integer("views");
			$table->integer("likes");
			$table->text("title", 255);
			$table->text("body");
			$table->dateTime('created_at');
			$table->string('img');
			$table->string('tags');
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("posts");
	}

}
