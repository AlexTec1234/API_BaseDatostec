<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//se debe importar el modelo que corresponda a la tabla de la base de datos
use App\Models\Carrera;

class CarreraController extends Controller
{
    
    // Método para obtener todas las carreras
    public function index()
    {
        $carreras = Carrera::all();
        return response()->json($carreras);
    }

    // Método para obtener una carrera por ClaveCarrera
    public function show($ClaveCarrera)
    {
        $carrera = Carrera::findOrFail($ClaveCarrera);
        return response()->json($carrera);
    }

    // Método para registrar una nueva carrera
    public function store(Request $request)
    {
        $request->validate([
            'ClaveCarrera' => 'required|string|max:20|unique:carreras',
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:255',
        ]);

        $nuevaCarrera = new Carrera();
        $nuevaCarrera->ClaveCarrera = $request->input('ClaveCarrera');
        $nuevaCarrera->Nombre = $request->input('Nombre');
        $nuevaCarrera->Descripcion = $request->input('Descripcion');
        $nuevaCarrera->save();

        return response()->json(['message' => 'Carrera registrada exitosamente', 'carrera' => $nuevaCarrera]);
    }

    // Método para actualizar una carrera
    public function update(Request $request, $ClaveCarrera)
    {
        $carrera = Carrera::findOrFail($ClaveCarrera);

        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:255',
        ]);

        $carrera->Nombre = $request->input('Nombre');
        $carrera->Descripcion = $request->input('Descripcion');
        $carrera->save();

        return response()->json(['message' => 'Carrera actualizada exitosamente', 'carrera' => $carrera]);
    }

    // Método para eliminar una carrera
    public function destroy($ClaveCarrera)
    {
        $carrera = Carrera::findOrFail($ClaveCarrera);
        $carrera->delete();

        return response()->json(['message' => 'Carrera eliminada exitosamente']);
    }
}
