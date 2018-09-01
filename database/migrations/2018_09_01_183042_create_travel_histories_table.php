<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->integer('serie');
            $table->date('data_emissao');
            $table->decimal('peso_saida', 10, 2);
            $table->decimal('peso_chegada', 10, 2)->nullable();
            $table->integer('cpf_cnpj_emitente');
            $table->integer('inscricao_estadual_emitente');
            $table->string('razao_social_emitente', 100);
            $table->string('mercadoria', 100);
            $table->integer('codigo_ibge_cidade_origem');
            $table->integer('codigo_ibge_cidade_destino');
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
        Schema::dropIfExists('travel_histories');
    }
}
