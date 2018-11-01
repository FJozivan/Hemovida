<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRespostaPergunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_perguntas', function (Blueprint $table) {
            
            //Minhas colunas
            $table->increments('id_resposta');
            $table->tinyInteger('resposta')->nullable($value = false);
            $table->integer('id_pergunta')->unsigned();
            $table->integer('id_doador')->unsigned();
            
            //Relação com tabelas
            $table->foreign('id_pergunta')->references('id_pergunta')->on('pergunta_formularios');
            $table->foreign('id_doador')->references('id')->on('doadors');
            
            //colunas padrão larav
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resposta_perguntas');
    }
}
