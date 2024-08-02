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
        Schema::create('doacao_produto_ongs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('organizacaos_id');
            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('CASCADE') // Corrigi o erro de sintaxe aqui
            ->onUpdate('CASCADE');
            $table->foreign('organizacaos_id')
                ->references('id')
                ->on('organizacaos')
                ->onDelete('CASCADE') // Corrigi o erro de sintaxe aqui
                ->onUpdate('CASCADE');
            $table->longText('doados');
            $table->date('entrega');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doacao_produto_ongs');
    }
};
