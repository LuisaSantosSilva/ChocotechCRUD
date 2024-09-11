<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// web.php
Route::get('/produtos', [ProdutoController::class, 'index'])
->middleware(['auth', 'verified'])->name('produtos');


Route::post("/adicionar", [ProdutoController::class, "adicionar"]);
Route::get("/editar/{id}", [ProdutoController::class, "editar"]);
Route::post("/atualizar/{id}", [ProdutoController::class, "atualizar"]);
Route::get("/excluir/{id}", [ProdutoController::class, "excluir"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
