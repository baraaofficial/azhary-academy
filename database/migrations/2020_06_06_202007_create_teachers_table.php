<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->text('description')->nullable();
			$table->string('email');
			$table->string('image');
			$table->integer('phone');
			$table->string('school');
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}