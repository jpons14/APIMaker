<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateABTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_b', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('a_id')->unsigned();
            $table->integer('b_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('a_b', function (Blueprint $table){

            $table->foreign('a_id')->references('id')
                ->on('a');
            $table->foreign('b_id')->references('id')
                ->on('a'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_b');
    }
}
