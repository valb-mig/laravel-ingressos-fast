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
        Schema::create('salas_assentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_assento');
            $table->enum('status_assento', ['A', 'I'])->default('A');
            $table->unsignedBigInteger('id_sala');
            $table->foreign('id_sala')->references('id')->on('salas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salas_assentos');
    }
};
