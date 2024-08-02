<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrganizacaoController;

Route::group(['prefix' => 'organizacoes'], function () {
    Route::get('/', [OrganizacaoController::class, 'index'])->name('organizacoes.index');
    Route::get('/documentos/{id_organizacao}', [OrganizacaoController::class, 'documentos'])->name('organizacoes.documentos');
    Route::get('/create', [OrganizacaoController::class, 'create'])->name('organizacoes.create');
    Route::post('/store', [OrganizacaoController::class, 'store'])->name('organizacoes.store');
    Route::get('/{organizacao}', [OrganizacaoController::class, 'show'])->name('organizacoes.show');
    Route::get('/{organizacao}/edit', [OrganizacaoController::class, 'edit'])->name('organizacoes.edit');
    Route::post('/{organizacao}', [OrganizacaoController::class, 'update'])->name('organizacoes.update');
    Route::get('/{organizacao}', [OrganizacaoController::class, 'delete'])->name('organizacoes.destroy');
    Route::get('/activar/{organizacao}', [OrganizacaoController::class, 'activar'])->name('organizacao.activar');
    Route::get('/desativar/{organizacao}', [OrganizacaoController::class, 'desativar'])->name('organizacao.desativar');
});
