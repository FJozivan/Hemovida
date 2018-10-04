<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerguntaFormulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta_formularios', function (Blueprint $table) {
            
            //Minhas colunas
            $table->increments('id_pergunta');
            $table->string('corpo_pergunta',500)->nullable($value = false);
            $table->integer('id_formulario')->unsigned();
            
            //Relação com tabelas
            $table->foreign('id_formulario')->references('id_formulario')->on('formularios');
            
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
        Schema::dropIfExists('pergunta_formularios');
    }
}
