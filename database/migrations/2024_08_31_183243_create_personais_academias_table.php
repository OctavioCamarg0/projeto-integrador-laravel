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
        Schema::create('personais_academias', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('academia_id');

            $table->foreign('personal_id')->references('id')->on('personais');
            $table->foreign('academia_id')->references('id')->on('academias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personais_academias');
    }
};
