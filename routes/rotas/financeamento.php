<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FinanciamentoController;

Route::group(['prefix' => 'financiamentos'], function () {
    Route::get('/', [FinanciamentoController::class, 'index'])->name('financiamento.index');
    Route::get('/create', [FinanciamentoController::class, 'create'])->name('financiamento.create');
    Route::post('/', [FinanciamentoController::class, 'store'])->name('financiamento.store');
    Route::post('/{financiamento}', [FinanciamentoController::class, 'update'])->name('financiamento.update');
    Route::post('video/{financiamento}', [FinanciamentoController::class, 'video'])->name('financiamento.video.update');
    Route::get('/{financiamento}', [FinanciamentoController::class, 'destroy'])->name('financiamento.delete');
    Route::get('/activar/{financiamento}', [FinanciamentoController::class, 'activar'])->name('financiamento.activar');
    Route::get('/desativar/{financiamento}', [FinanciamentoController::class, 'desativar'])->name('financiamento.desativar');
});
