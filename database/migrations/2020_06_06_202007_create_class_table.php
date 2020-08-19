<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassTable extends Migration {

	public function up()
	{
		Schema::create('class', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('class');
	}
}
