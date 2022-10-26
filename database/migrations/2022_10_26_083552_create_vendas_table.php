<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nome_cliente')->nullable();
            $table->double('total_venda');
            $table->double('valor_total_parcela')->nullable();
            $table->integer('quantidade_parcelas')->nullable();
            $table->enum('forma_pagamento', ['CREDITO', 'DEBITO', 'BOLETO', 'PARCELADO']);
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
        Schema::dropIfExists('vendas');
    }
}
