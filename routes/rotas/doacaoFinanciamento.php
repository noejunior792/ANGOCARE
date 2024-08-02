<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doacao\FinanciamentoController;

Route::group(['prefix' => 'doacao_financiamentos'], function () {
    Route::get('/', [FinanciamentoController::class, 'index'])->name('doacao.financiamento.index');
    Route::post('/store/{id}', [FinanciamentoController::class, 'store'])->name('doacao.financiamento.store');
    Route::post('/{financiamento}', [FinanciamentoController::class, 'update'])->name('doacao.financiamento.update');
    // Route::get('/{financiamento}', [FinanciamentoController::class, 'destroy'])->name('doacao.financiamento.delete');
    Route::get('/activar/{financiamento}', [FinanciamentoController::class, 'activar'])->name('doacao.financiamento.activar');
    Route::get('/desativar/{financiamento}', [FinanciamentoController::class, 'desativar'])->name('doacao.financiamento.desativar');
});
Route::get('/doacao_empresa_financiamentos', [FinanciamentoController::class, 'index2'])->name('doacao.financiamento.index2');
