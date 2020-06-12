<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactUsTable extends Migration {

	public function up()
	{
		Schema::create('contact_us', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->integer('phone')->nullable();
			$table->text('message');
			$table->string('subject');
		});
	}

	public function down()
	{
		Schema::drop('contact_us');
	}
}