<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdutoController;

Route::prefix('produtos')->group(function () {
    // Rotas para criar, exibir, atualizar e excluir produtos
    Route::post('/', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/{produto}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::post('video/{produto}', [ProdutoController::class, 'video'])->name('produto.video.update');
   
    Route::get('/{produto}', [ProdutoController::class, 'destroy'])->name('produto.delete');
    Route::get('/activar/{produto}', [ProdutoController::class, 'activar'])->name('produto.activar');
    Route::get('/desativar/{produto}', [ProdutoController::class, 'desativar'])->name('produto.desativar');
});
