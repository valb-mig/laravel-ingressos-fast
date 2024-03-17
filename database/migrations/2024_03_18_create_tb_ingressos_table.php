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
        Schema::create('tb_ingressos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_filme')->nullable();
            $table->foreign('id_filme')->references('id')->on('tb_filmes');
            $table->unsignedBigInteger('id_sala')->nullable();
            $table->foreign('id_sala')->references('id')->on('tb_salas');
            $table->unsignedBigInteger('id_cinema')->nullable();
            $table->foreign('id_cinema')->references('id')->on('tb_cinemas');
            $table->integer('qtd_ingressos');
            $table->date('validade_ingresso');
            $table->time('hora_entrada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ingressos');
    }
};
