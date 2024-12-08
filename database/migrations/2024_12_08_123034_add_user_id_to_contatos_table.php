<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    if (!Schema::hasColumn('clientes', 'senha')) {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('senha')->nullable();
        });
    }
}

public function down()
{
    Schema::table('clientes', function (Blueprint $table) {
        $table->dropColumn('senha');
    });
}


};
