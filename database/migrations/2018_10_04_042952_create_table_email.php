<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            
            //Minhas colunas
            $table->increments('id');
            $table->string('corpo_email',45)->nullable($value = false);
            $table->string('assunto_email',100);
            $table->integer('id_funcionario')->unsigned();

            //Relação com tabelas
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');

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
        Schema::dropIfExists('emails');
    }
}
