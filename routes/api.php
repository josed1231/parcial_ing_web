<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController; // <-- 1. Importa  controlador
use App\Http\Controllers\RegistroSemilleroController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 2. Añade tu nueva ruta 
Route::post('/personas', [PersonaController::class, 'store']);

Route::post('/registro-semilleros', [RegistroSemilleroController::class, 'store']);