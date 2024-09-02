<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('academia', 70);
            $table->string('endereco', 100);
            $table->string('cidade', 70);
            $table->string('bairro', 50);
            $table->string('cep', 9);
            $table->time('horario_abertura');
            $table->time('horario_fechamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academias');
    }
};
