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
        Schema::create('dp_filmes_cinemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_filme');
            $table->foreign('id_filme')->references('id')->on('tb_filmes');
            $table->unsignedBigInteger('id_cinema');
            $table->foreign('id_cinema')->references('id')->on('tb_cinemas');
            $table->enum('status_filme', ['A', 'I'])->default('A'); // A = Ativo | I = Inativo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dp_filmes_cinemas');
    }
};
