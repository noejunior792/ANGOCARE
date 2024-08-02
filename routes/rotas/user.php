<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdutoController;

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
    Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
    Route::post('/update{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.user.update');
    Route::get('/delete{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('/list', [App\Http\Controllers\Admin\UserController::class, 'list'])->name('admin.user.list');
});
