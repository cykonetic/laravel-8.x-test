<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordLookups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_exercise', function (Blueprint $table) {
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedBigInteger('exercise_id');
        });

        Schema::create('keyword_journal', function (Blueprint $table) {
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedBigInteger('journal_id');
        });

        Schema::create('keyword_lesson', function (Blueprint $table) {
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedBigInteger('lesson_id');
        });

        Schema::create('keyword_measure', function (Blueprint $table) {
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedBigInteger('measure_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword_exercise');
        Schema::dropIfExists('keyword_journal');
        Schema::dropIfExists('keyword_lesson');
        Schema::dropIfExists('keyword_measure');
    }
}
