<?php

use App\Http\Controllers\relatorioController;
use App\Http\Controllers\topicoController;
use App\Http\Controllers\userController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('create/usuario', [userController::class, 'create'])->name('create.usuario');
Route::post('store/usuario', [userController::class, 'store'])->name('store.usuario');
Route::get('login', [userController::class, 'login'])->name('login');
Route::post('logar', [userController::class, 'logar'])->name('logar');

Route::middleware(Authenticate::class)->group(function () {
    Route::get('sair', [userController::class, 'sair'])->name('sair');
    Route::get('index', [userController::class, 'index'])->name('index');

    Route::get('create/topico', [topicoController::class, 'create'])->name('create.topico');
    Route::post('store/topico', [topicoController::class, 'store'])->name('store.topico');

    Route::get('topico', [relatorioController::class, 'topico'])->name('topico');
    Route::get('create/relatorio', [relatorioController::class, 'create'])->name('create.relatorio');
    Route::post('store/relatorio', [relatorioController::class, 'store'])->name('store.relatorio');
    Route::get('falta', [relatorioController::class, 'falta'])->name('teste.falta');
    Route::get('pdfFalta', [relatorioController::class, 'pdfFalta'])->name('pdfFalta');
    Route::put('edit/{id}', [relatorioController::class, 'edit'])->name('edit');
    Route::get('detalhes/{id}', [relatorioController::class, 'detalhes'])->name('detalhes');
    Route::get('concluidos', [relatorioController::class, 'concluidos'])->name('concluidos');
    Route::get('pdfConcluido', [relatorioController::class, 'pdfConcluido'])->name('pdfConcluido');
    Route::delete('/{id}', [relatorioController::class, 'destroy'])->name('destroy');
});
