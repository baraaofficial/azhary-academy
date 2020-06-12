<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourssTable extends Migration {

	public function up()
	{
		Schema::create('courss', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
			$table->string('video');
			$table->string('image');
			$table->string('love')->nullable();
			$table->string('dislove')->nullable();
			$table->integer('review')->nullable();
			$table->string('cat_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('courss');
	}
}