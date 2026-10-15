<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroSemillero;

class RegistroSemilleroController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validación de campos según requerimientos
        $validatedData = $request->validate([
            'semillero' => 'required|string|max:100',
            'linea_investigacion' => 'nullable|string|max:100',
        ]);

        // 2. Inserción usando Eloquent
        $registro = RegistroSemillero::create($validatedData);

        // 3. Respuesta JSON estandarizada (Status 201: Created)
        return response()->json([
            'mensaje' => 'Participante de semillero registrado exitosamente',
            'data' => $registro
        ], 201);
    }
}