<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\HomeController;

Route::get('/index', [HomeController::class, 'index'])->name('admin.index');
    
require __DIR__ . '/rotas/produtos.php';
require __DIR__ . '/rotas/user.php';
require __DIR__ . '/rotas/produtos.php';
require __DIR__ . '/rotas/organizacao.php';
require __DIR__ . '/rotas/financeamento.php';
require __DIR__ . '/rotas/documento.php';
require __DIR__ . '/rotas/doacaoFinanciamento.php';
require __DIR__ . '/rotas/doacaoProduto.php';
require __DIR__ . '/rotas/doacaoOrganizacao.php';
require __DIR__ . '/rotas/relatorio.php';