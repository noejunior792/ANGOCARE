<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Relatorio\FinanciamentoController;
use App\Http\Controllers\Relatorio\ProdutoController;
use App\Http\Controllers\Relatorio\OrganizacaoController;
use App\Http\Controllers\Relatorio\FinanciamentoDoacaoController;
use App\Http\Controllers\Relatorio\ProdutoDoacaoController;
use App\Http\Controllers\Relatorio\EmpresaFinanciamentoController;
use App\Http\Controllers\Relatorio\EmpresaProdutoController;

Route::group(['prefix' => 'relatorio'], function () {

    Route::group(['prefix' => 'financiamento'], function () {
        Route::get('/', [FinanciamentoController::class, 'index'])->name('relatorio.financiamento.index');
        Route::post('/store', [FinanciamentoController::class, 'request'])->name('relatorio.financiamento.request');
   
    });
    Route::group(['prefix' => 'produto'], function () {
        Route::get('/', [ProdutoController::class, 'index'])->name('relatorio.produto.index');
        Route::post('/store', [ProdutoController::class, 'request'])->name('relatorio.produto.request');
   
    });
    Route::group(['prefix' => 'organizacao'], function () {
        Route::get('/', [organizacaoController::class, 'index'])->name('relatorio.organizacao.index');
        Route::post('/store', [OrganizacaoController::class, 'request'])->name('relatorio.organizacao.request');
   
    });
    Route::group(['prefix' => 'doacao_financiamento'], function () {
        Route::get('/', [FinanciamentoDoacaoController::class, 'index'])->name('relatorio.doacao.financiamento.index');
        Route::post('/store', [FinanciamentoDoacaoController::class, 'request'])->name('relatorio.doacao.financiamento.request');
   
    });
    Route::group(['prefix' => 'doacao_produto'], function () {
        Route::get('/', [ProdutoDoacaoController::class, 'index'])->name('relatorio.doacao.produto.index');
        Route::post('/store', [ProdutoDoacaoController::class, 'request'])->name('relatorio.doacao.produto.request');
   
    });
    Route::group(['prefix' => 'doacao_empresa_financiamento'], function () {
        Route::get('/', [EmpresaFinanciamentoController::class, 'index'])->name('relatorio.doacao.empresa.financiamento.index');
        Route::post('/store', [EmpresaFinanciamentoController::class, 'request'])->name('relatorio.doacao.empresa.financiamento.request');
   
    });
    Route::group(['prefix' => 'doacao_empresa_produto'], function () {
        Route::get('/', [EmpresaProdutoController::class, 'index'])->name('relatorio.doacao.empresa.produto.index');
        Route::post('/store', [EmpresaProdutoController::class, 'request'])->name('relatorio.doacao.empresa.produto.request');
   
    });
});
