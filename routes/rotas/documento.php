<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DocumentoController;

Route::group(['prefix' => 'documentos'], function () {
    Route::get('/', [DocumentoController::class, 'index'])->name('admin.documento.index');
    Route::post('/', [DocumentoController::class, 'store'])->name('admin.documento.store');
    Route::post('/{documento}', [DocumentoController::class, 'update'])->name('admin.documento.update');
    Route::get('/{documento}', [DocumentoController::class, 'destroy'])->name('admin.documento.delete');
});
