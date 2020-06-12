<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
			$table->string('cours_id')->nullable();
			$table->string('user_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}