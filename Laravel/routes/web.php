<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FormularioController;



Route::get('/inicio', [InicioController::class, 'index'])->name('inicio.index');
Route::post('/registrar', [InicioController::class, 'registrar'])->name('inicio.registrar');
Route::get('/formularios', [FormularioController::class, 'index'])->name('formularios.index');





Route::get('/formularios', [FormularioController::class, 'index'])->name('formularios.index');
Route::get('/estudiantes', [FormularioController::class, 'estudiantes'])->name('formularios.estudiantes');
Route::get('/funcionarios', [FormularioController::class, 'funcionarios'])->name('formularios.funcionarios');
Route::get('/visitantes', [FormularioController::class, 'visitantes'])->name('formularios.visitantes');



