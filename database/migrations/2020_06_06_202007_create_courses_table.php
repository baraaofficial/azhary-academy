<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('category');
			$table->string('image');
			$table->integer('price');
			$table->integer('love')->nullable();
			$table->integer('class_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->integer('cat_id')->nullable();
			$table->integer('user_id')->nullable();
            $table->enum('state', array('pending', 'accepted', 'rejected'))->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
	}

	public function down()
	{
		Schema::drop('courses');
	}
}
