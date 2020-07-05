<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatelessonsTable extends Migration {

	public function up()
	{
		Schema::create('lessons', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('video');
			$table->string('image');
			$table->string('pdf')->nullable();
			$table->string('love')->nullable();
			$table->string('dislove')->nullable();
			$table->integer('review')->nullable();
			$table->string('mb3')->nullable();
			$table->string('course_id')->nullable();
			$table->text('experimental')->nullable();
			$table->text('answer')->nullable();
            $table->text('experimental2')->nullable();
            $table->text('answer2')->nullable();
            $table->text('experimental3')->nullable();
            $table->text('answer3')->nullable();
            $table->text('experimental4')->nullable();
            $table->text('answer4')->nullable();
            $table->text('experimental5')->nullable();
            $table->text('answer5')->nullable();
            $table->text('experimental6')->nullable();
            $table->text('answer6')->nullable();
            $table->text('experimental7')->nullable();
            $table->text('answer7')->nullable();
            $table->text('experimental8')->nullable();
            $table->text('answer8')->nullable();
            $table->text('experimental9')->nullable();
            $table->text('answer9')->nullable();
            $table->text('experimental10')->nullable();
            $table->text('answer10')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['deleted_at']);
		});
	}

	public function down()
	{
		Schema::drop('lessons');
	}
}
