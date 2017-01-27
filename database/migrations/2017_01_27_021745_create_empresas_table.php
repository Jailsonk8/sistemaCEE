<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_empresa')->unsigned();
            $table->foreign('user_id_empresa')->references('id')->on('users')->onDelete('cascade');
            $table->string('representante');
            $table->string('cargo');
            $table->string('nome_empresa');
            $table->string('area_atuante');
            $table->string('cnpj')->unique();
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->string('cep');
            $table->string('fone');
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
        Schema::dropIfExists('empresas');
    }
}
