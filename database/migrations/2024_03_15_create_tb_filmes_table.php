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
        Schema::create('tb_filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_filme');
            $table->string('descricao_filme');
            $table->string('image_path');
            $table->unsignedBigInteger('id_usuario');
            $table->enum('status_filme',['A', 'I'])->default('A'); // A = Ativo | I = Inativo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_filmes');
    }
};
