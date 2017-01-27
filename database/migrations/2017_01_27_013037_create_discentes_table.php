<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('curriculo_id')->unsigned();
            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('matricula')->unique();
            $table->string('cpf')->unique();
            $table->string('ctps')->unique();
            $table->string('rg_expeditor')->unique();
            $table->enum('curso',['Informatica', 'Eletrotecnica', 'Edificacao']);
            $table->date('nascimento');
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
        Schema::dropIfExists('discentes');
    }
}
