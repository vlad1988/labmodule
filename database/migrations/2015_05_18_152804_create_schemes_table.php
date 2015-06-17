<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchemesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('schemes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->date('expiredate');
            $table->integer('unit');
            $table->integer('discipline_id')->unsigned();
            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('schemes');
    }

}
