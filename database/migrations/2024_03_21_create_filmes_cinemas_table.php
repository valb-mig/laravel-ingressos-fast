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
        Schema::create('filmes_cinemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_filme');
            $table->foreign('id_filme')->references('id')->on('filmes');
            $table->unsignedBigInteger('id_cinema');
            $table->foreign('id_cinema')->references('id')->on('cinemas');
            $table->enum('status_filme', ['A', 'I'])->default('A'); // A = Ativo | I = Inativo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes_cinemas');
    }
};
