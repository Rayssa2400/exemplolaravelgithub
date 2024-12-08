<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('feedback', function (Blueprint $table) {
        $table->id();
        $table->string('nome')->nullable();
        $table->string('email')->nullable();
        $table->text('mensagem');
        $table->unsignedBigInteger('user_id')->default(0); // Torna o user_id opcional
        $table->timestamps();
    });
}





    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
