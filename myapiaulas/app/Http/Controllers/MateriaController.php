<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    // Método para obtener todas las materias
    public function index()
    {
        $materias = Materia::all();
        return response()->json($materias);
    }

    // Método para obtener una materia por ClaveMateria
    public function show($ClaveMateria)
    {
        $materia = Materia::findOrFail($ClaveMateria);
        return response()->json($materia);
    }

    // Método para registrar una nueva materia
    public function store(Request $request)
    {
        $request->validate([
            'ClaveMateria' => 'required|string|max:20|unique:materias',
            'ClaveCarrera' => 'required|string|max:20|exists:carreras,ClaveCarrera', // Validar que la clave carrera exista
            'Nombre' => 'required|string|max:100',
            'Creditos' => 'required|integer',
        ]);

        $nuevaMateria = new Materia();
        $nuevaMateria->ClaveMateria = $request->input('ClaveMateria');
        $nuevaMateria->ClaveCarrera = $request->input('ClaveCarrera');
        $nuevaMateria->Nombre = $request->input('Nombre');
        $nuevaMateria->Creditos = $request->input('Creditos');
        $nuevaMateria->save();

        return response()->json(['message' => 'Materia registrada exitosamente', 'materia' => $nuevaMateria]);
    }

    // Método para actualizar una materia
    public function update(Request $request, $ClaveMateria)
    {
        $materia = Materia::findOrFail($ClaveMateria);

        $request->validate([
            'ClaveCarrera' => 'required|string|max:20|exists:carreras,ClaveCarrera', // Validar que la clave carrera exista
            'Nombre' => 'required|string|max:100',
            'Creditos' => 'required|integer',
        ]);

        $materia->ClaveCarrera = $request->input('ClaveCarrera');
        $materia->Nombre = $request->input('Nombre');
        $materia->Creditos = $request->input('Creditos');
        $materia->save();

        return response()->json(['message' => 'Materia actualizada exitosamente', 'materia' => $materia]);
    }

    // Método para eliminar una materia
    public function destroy($ClaveMateria)
    {
        $materia = Materia::findOrFail($ClaveMateria);
        $materia->delete();

        return response()->json(['message' => 'Materia eliminada exitosamente']);
    }
}
