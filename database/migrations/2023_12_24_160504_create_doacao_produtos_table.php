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
        Schema::create('doacao_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('produtos_id');
            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('CASCADE') // Corrigi o erro de sintaxe aqui
            ->onUpdate('CASCADE');
            $table->foreign('produtos_id')
                ->references('id')
                ->on('produtos')
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
        Schema::dropIfExists('doacao_produtos');
    }
};
