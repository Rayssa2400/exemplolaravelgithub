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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idpedido')->unsigned();
            $table->date('data');
            $table->double('valor_total', 10, 2)->nullable();
            $table->unsignedBigInteger('funcionario_idfuncionario');
            $table->string('cliente_idcliente', 14);
            $table->timestamps();

            $table->foreign('funcionario_idfuncionario')
                  ->references('idfuncionario')->on('funcionarios')
                  ->onDelete('cascade');

            $table->foreign('cliente_idcliente')
                  ->references('cpf')->on('clientes')
                  ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
