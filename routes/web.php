<?php

use App\Http\Controllers\Relatorio;
use App\Http\Controllers\Topico;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('create/usuario', [User::class, 'create'])->name('create.usuario');
Route::get('login', [User::class, 'login'])->name('login');
Route::get('index', [User::class, 'index'])->name('index');

Route::get('create/topico', [Topico::class, 'create'])->name('create.topico');

Route::get('create/relatorio', [Relatorio::class, 'create'])->name('create.relatorio');
Route::get('concluidos', [Relatorio::class, 'concluidos'])->name('concluidos');
Route::get('falta', [Relatorio::class, 'falta'])->name('falta');
