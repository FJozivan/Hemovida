<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmailParaDoador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_para_doadors', function (Blueprint $table) {
            
            //Minhas colunas
            $table->integer('id_email')->unsigned();
            $table->integer('id_doador')->unsigned();

            //Relação com tabelas
            $table->foreign('id_email')->references('id_email')->on('emails');
            $table->foreign('id_doador')->references('id')->on('doadors');
            
            //colunas padrão laravel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_para_doadors');
    }
}
