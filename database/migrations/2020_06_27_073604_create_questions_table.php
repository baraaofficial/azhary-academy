<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lesson_id')->unsigned()->nullable();
            $table->foreign('lesson_id', 'fk_256_lesson_lesson_id_question')->references('id')->on('lessons');
            $table->text('question_text')->nullable();
            $table->text('code_snippet')->nullable();
            $table->text('answer_explanation')->nullable();
            $table->string('more_info_link')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
