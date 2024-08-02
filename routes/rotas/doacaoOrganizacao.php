<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ong\FinanciamentoController;
use App\Http\Controllers\Ong\ProdutoController;

Route::group(['prefix' => 'doacao_organizacao_financiamentos'], function () {
    Route::get('/', [FinanciamentoController::class, 'index'])->name('organizacao.doacao.financiamento.index');
    Route::post('/store/{id}', [FinanciamentoController::class, 'store'])->name('organizacao.doacao.financiamento.store');
    Route::post('/{financiamento}', [FinanciamentoController::class, 'update'])->name('organizacao.doacao.financiamento.update');
    // Route::get('/{financiamento}', [FinanciamentoController::class, 'destroy'])->name('organizacao.doacao.financiamento.delete');
    Route::get('/activar/{financiamento}', [FinanciamentoController::class, 'activar'])->name('organizacao.doacao.financiamento.activar');
    Route::get('/desativar/{financiamento}', [FinanciamentoController::class, 'desativar'])->name('organizacao.doacao.financiamento.desativar');
});

Route::prefix('doacao_organizacao_produtos')->group(function () {
    // Rotas para criar, exibir, atualizar e excluir produtos
    Route::post('/{id}', [ProdutoController::class, 'store'])->name('organizacao.doacao.produto.store');
    Route::get('/', [ProdutoController::class, 'index'])->name('organizacao.doacao.produto.index');
    Route::post('/{produto}', [ProdutoController::class, 'update'])->name('organizacao.doacao.produto.update');
    // Route::get('/{produto}', [ProdutoController::class, 'destroy'])->name('organizacao.doacao.produto.delete');
    Route::get('/activar/{produto}', [ProdutoController::class, 'activar'])->name('organizacao.doacao.produto.activar');
    Route::get('/desativar/{produto}', [ProdutoController::class, 'desativar'])->name('organizacao.doacao.produto.desativar');
});
