<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            
            //Minhas colunas
            $table->increments('id_funcionario');
            $table->String('senha',100)->nullable($value = false);
            $table->integer('inscricao_hemoce')->unique()->nullable($value = false);
            $table->String('nome',45)->nullable($value = false);
            $table->string('sexo',10)->nullable($value = false);
            $table->String('sobrenome',45);
            $table->String('email',45)->nullable($value = false);

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
        Schema::dropIfExists('funcionarios');
    }
}
