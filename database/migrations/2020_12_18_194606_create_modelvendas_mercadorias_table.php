<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelvendasMercadoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendas_mercadorias', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('id_venda');
            $table->foreign('id_venda')->references('id')->on('Vendas')->onDelete('cascade');
            $table->unsignedBigInteger('id_mercadoria');
            $table->foreign('id_mercadoria')->references('id')->on('Mercadorias')->onDelete('cascade');
            $table->double('preco');
            $table->double('quantidade');
            $table->double('total_mercadoria');
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
        Schema::dropIfExists('modelvendas_mercadorias');
    }
}
