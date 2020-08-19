<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration {

	public function up()
	{
		Schema::create('contact_us', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->integer('phone')->nullable();
			$table->text('message');
			$table->string('subject');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('contact_us');
	}
}
