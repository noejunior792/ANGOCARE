<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doacao\ProdutosController;

Route::prefix('doacao_produtos')->group(function () {
    // Rotas para criar, exibir, atualizar e excluir produtos
    Route::post('/{id}', [ProdutosController::class, 'store'])->name('doacao.produto.store');
    Route::get('/', [ProdutosController::class, 'index'])->name('doacao.produto.index');
    Route::post('/{produto}', [ProdutosController::class, 'update'])->name('doacao.produto.update');
    // Route::get('/{produto}', [ProdutosController::class, 'destroy'])->name('doacao.produto.delete');
    Route::get('/activar/{produto}', [ProdutosController::class, 'activar'])->name('doacao.produto.activar');
    Route::get('/desativar/{produto}', [ProdutosController::class, 'desativar'])->name('doacao.produto.desativar');
});

Route::get('/doacao_empresa_produtos', [ProdutosController::class, 'index2'])->name('doacao.produto.index2');