<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CausasController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\OrganizacoesController;
use App\Http\Controllers\Site\ContacteController;
use App\Http\Controllers\Site\DoacaoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('site.home.index');

Route::get('/sobre',[SobreController::class, 'index'])->name('site.sobre.index');

Route::get('/causas_financeiras',[CausasController::class, 'index'])->name('site.causas.index');

Route::get('/causas_financeiras/{id}',[CausasController::class, 'show'])->name('site.causas.show');

Route::get('/causas_produtos',[CausasController::class, 'index2'])->name('site.causas.index2');

Route::get('/causas_produtos/{id}',[CausasController::class, 'show2'])->name('site.causas.show2');

Route::get('/ongs',[OrganizacoesController::class, 'index'])->name('site.ong.index');

Route::get('/ongs/{id}',[OrganizacoesController::class, 'show'])->name('site.ong.show');

Route::get('/contacte-nos',[ContacteController::class, 'index'])->name('site.contacte.index');

Route::get('/doacao_financeiro/{id}',[DoacaoController::class, 'index'])->name('site.doar.index');
Route::get('/doacao_produtos/{id}',[DoacaoController::class, 'index2'])->name('site.doar.index2');

Route::get('/organizacao_doacao_financeiro/{id}',[DoacaoController::class, 'index3'])->name('site.doar.index3');
Route::get('/organizacao_doacao_produtos/{id}',[DoacaoController::class, 'index4'])->name('site.doar.index4');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
