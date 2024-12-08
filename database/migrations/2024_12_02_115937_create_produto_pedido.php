<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_pedido', function (Blueprint $table) {
            $table->unsignedBigInteger('pedido_idpedido');
            $table->unsignedBigInteger('produto_idproduto');
            $table->integer('quantidade');
            $table->timestamps();

            $table->primary(['pedido_idpedido', 'produto_idproduto']);

            $table->foreign('pedido_idpedido')->references('idpedido')->on('pedidos')->onDelete('cascade');
            $table->foreign('produto_idproduto')->references('idproduto')->on('produtos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_pedido');
    }
};
