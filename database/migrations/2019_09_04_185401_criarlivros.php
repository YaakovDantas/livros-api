<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Criarlivros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedBigInteger('autor_id');
            $table->string('nome');
            $table->decimal('valor',8,2);
            $table->foreign('autor_id')->references('id')->on('autores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livros');
    }
}

