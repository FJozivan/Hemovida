<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            
            //Minhas colunas
            $table->increments('id_master');
            $table->String('nome_master',45)->nullable($value = false);
            $table->String('login',45)->unique()->nullable($value = false);
            $table->String('senha',100)->nullable($value = false);

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
        Schema::dropIfExists('masters');
    }
}
