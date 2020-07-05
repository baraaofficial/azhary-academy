<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassSubjectTable extends Migration {

	public function up()
	{
		Schema::create('class_subject', function(Blueprint $table) {
			$table->increments('id');
			$table->string('class_id')->nullable();
			$table->string('subject_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('class_subject');
	}
}
