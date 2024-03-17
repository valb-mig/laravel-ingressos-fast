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
        Schema::create('dp_roles_acoes', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_role')->references('id')->on('tb_roles');
            $table->unsignedBigInteger('id_role');
            $table->string('acao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dp_roles_acoes');
    }
};
