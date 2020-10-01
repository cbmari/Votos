<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            
            $table->id();
            $table->integer('cadastro');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('vinculo');
            $table->string('segmento');
            $table->string('whatsapp');
            $table->string('rua');
            $table->string('num');
            $table->string('bairro');
            $table->string('apoio');
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
        Schema::dropIfExists('votos');
    }
}
