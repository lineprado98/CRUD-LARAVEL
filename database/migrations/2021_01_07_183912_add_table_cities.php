<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citie', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('id_state')->unsigned();
            $table->timestamps();
            //chave
            $table->foreign('id_state')->
            references('id')->
            on('state')->
            onDelte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('citie');
    }
}
