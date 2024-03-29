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
        Schema::create('tb_salas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_sala');
            $table->enum('status_sala',['A', 'I'])->default('A'); // A = Ativa | I = Inativa
            $table->unsignedBigInteger('id_cinema');
            $table->foreign('id_cinema')->references('id')->on('tb_cinemas');
            $table->unsignedBigInteger('id_filme');
            $table->foreign('id_filme')->references('id')->on('tb_filmes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_salas');
    }
};
