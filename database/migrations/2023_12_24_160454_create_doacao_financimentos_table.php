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
        Schema::create('doacao_financimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('financiamentos_id');
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE') // Corrigi o erro de sintaxe aqui
                ->onUpdate('CASCADE');
                $table->foreign('financiamentos_id')
                ->references('id')
                ->on('financiamentos')
                ->onDelete('CASCADE') // Corrigi o erro de sintaxe aqui
                ->onUpdate('CASCADE');
            $table->float('valores');
            $table->longText('comprovativo');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doacao_financimentos');
    }
};
