<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DisciplinaController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas para Professores
Route::resource('professores', ProfessorController::class);

// Rotas para Disciplinas
Route::resource('disciplinas', DisciplinaController::class);
