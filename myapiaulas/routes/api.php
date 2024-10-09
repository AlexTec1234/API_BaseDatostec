<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('asistencia', AsistenciaController::class);
Route::apiResource('aulas', AulaController::class);
Route::apiResource('carga-academica-detalles', CargaAcademicaDetalleController::class);
Route::apiResource('carga-academica-general', CargaAcademicaGeneralController::class);

//rutas de la para carreras
use App\Http\Controllers\CarreraController;
Route::get('/carreras', [CarreraController::class, 'index']);
Route::get('/carreras/{ClaveCarrera}', [CarreraController::class, 'show']);
Route::post('/carreras/registro', [CarreraController::class, 'store']);
Route::put('/carreras/{ClaveCarrera}', [CarreraController::class, 'update']);
Route::delete('/carreras/{ClaveCarrera}', [CarreraController::class, 'destroy']);




Route::apiResource('computadoras', ComputadoraController::class);
Route::apiResource('edificios', EdificioController::class);
Route::apiResource('grupos', GrupoController::class);
Route::apiResource('horario-materias', HorarioMateriaController::class);
Route::apiResource('maestros', MaestroController::class);

//rutas de la para materias
use App\Http\Controllers\MateriaController;
Route::get('/materias', [MateriaController::class, 'index']);
Route::get('/materias/{ClaveMateria}', [MateriaController::class, 'show']);
Route::post('/materias/registro', [MateriaController::class, 'store']);
Route::put('/materias/{ClaveMateria}', [MateriaController::class, 'update']);
Route::delete('/materias/{ClaveMateria}', [MateriaController::class, 'destroy']);



Route::apiResource('reservacion-alumnos', ReservacionAlumnoController::class);
Route::apiResource('reservacion-maestros', ReservacionMaestroController::class);
Route::apiResource('usuarios', UsuarioController::class);
