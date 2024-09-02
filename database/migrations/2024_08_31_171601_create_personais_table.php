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
        Schema::create('personais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('diploma', 100);
            $table->string('cref', 11);
            $table->text('formacoes');
            $table->decimal('preco', 8, 2);
            $table->unsignedBigInteger('usuario_id');

            //constraint relacionamento personais com usuario
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unique('usuario_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_personal');
    }
};
