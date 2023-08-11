<?php

use App\Http\Controllers\orcamentoController;
use App\Http\Controllers\PesquisaController;
use Illuminate\Support\Facades\Route;
use function Laravel\Prompts\search;

Route::get('/', [orcamentoController::class, 'index']);
Route::post('/orcamento', [orcamentoController::class, 'store']);

Route::get('/pesquisar', [PesquisaController::class, 'index'])->name('search.index');
Route::post('/pesquisar', [PesquisaController::class, 'search'])->name('search.search');

Route::get('/editar/{id}', [PesquisaController::class, 'edit'])->name('edit');
Route::get('/remover/{id}', [PesquisaController::class, 'remove'])->name('remove');
