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
        Schema::create('tb_cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cinema');
            $table->string('uf_cinema');
            $table->string('rua_cinema');
            $table->enum('status_cinema', ['A','F'])->default('A'); // A = Abreto | F = Fechado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cinemas');
    }
};
