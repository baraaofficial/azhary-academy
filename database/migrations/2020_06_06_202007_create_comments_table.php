<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->text('comment');
			$table->string('lesson_id')->nullable();
			$table->string('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
