<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('filepath');
            $table->date('approvedate');
            $table->string('status');
            $table->integer('discipline_id')->unique();;
            $table->integer('student_id')->unsigned();
            $table->integer('schema_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('schema_id')->references('id')->on('schemes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('reports');
    }

}
