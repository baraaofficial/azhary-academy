<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('category');
			$table->string('image');
			$table->integer('price');
			$table->integer('love');
            $table->enum('state', array('pending', 'accepted', 'rejected'));
        });
	}

	public function down()
	{
		Schema::drop('categories');
	}
}
