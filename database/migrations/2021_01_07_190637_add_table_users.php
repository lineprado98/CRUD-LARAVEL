<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('user', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->Integer('id_address')->unsigned()->nullable();
            $table->timestamps();
            //chave
            $table->foreign('id_address')->
            references('id')->
            on('address')->
            onDelte('cascade');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('user');
    }
}
