<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplineGroupTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('discipline_group', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('discipline_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('discipline_group');
    }

}
