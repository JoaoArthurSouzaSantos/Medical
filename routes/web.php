<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;

// Rotas para AtendimentoController
Route::get('/atendimentos', [AtendimentoController::class, 'index'])->name('atendimentos.index');
Route::get('/atendimentos/create', [AtendimentoController::class, 'create'])->name('atendimentos.create');
Route::post('/atendimentos', [AtendimentoController::class, 'store'])->name('atendimentos.store');
Route::get('/atendimentos/{id}', [AtendimentoController::class, 'show'])->name('atendimentos.show');
Route::get('/atendimentos/{id}/edit', [AtendimentoController::class, 'edit'])->name('atendimentos.edit');
Route::put('/atendimentos/{id}', [AtendimentoController::class, 'update'])->name('atendimentos.update');
Route::delete('/atendimentos/{id}', [AtendimentoController::class, 'destroy'])->name('atendimentos.destroy');

// Rotas para MedicoController
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
Route::get('/medicos/{id}', [MedicoController::class, 'show'])->name('medicos.show');
Route::get('/medicos/{id}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{id}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{id}', [MedicoController::class, 'destroy'])->name('medicos.destroy');

// Rotas para PacienteController
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{id}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
