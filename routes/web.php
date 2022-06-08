<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\ConsultasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('proyect', [pacientesController::class, 'index']);
// Route::get('proyect', [pacientesController::class, 'servicios']);

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/consulta', function () {
    return view('consulta');
});

// Route::get('/servicios', function () {
//     return view('servicios');
// });

/* Route::get('/seguimiento', function () {
    return view('seguimiento');
}); */


//pacientes
Route::post('crearPaciente', [PacienteController::class, 'store'])->name('crearPaciente');
//citas
Route::get('citas', [CitaController::class, 'index'])->name('citas');
Route::get('agenda', [CitaController::class, 'agenda'])->name('agenda');
Route::post('crearCita', [CitaController::class, 'store'])->name('crearCita');
Route::get('cita-show', [CitaController::class, 'show'])->name('cita-show');
Route::delete('cita/{cita}', [CitaController::class, 'destroy'])->name('cita.destroy');
//API
Route::get('getServicios', [ServicioController::class, 'getServicio'])->name('getServicios');
//promociones
Route::get('promociones', [PromocionesController::class, 'index'])->name('promociones');
Route::get('crearPromo', [PromocionesController::class, 'store'])->name('crearPromo');
Route::get('promoControl/{id}', [PromocionesController::class, 'promoControl'])->name('promoControl');
Route::get('sendmail/{id}', [PromocionesController::class, 'sendmail'])->name('sendmail');
Route::get('promoGinecologia', [PromocionesController::class, 'promoGinecologia'])->name('promoGinecologia');
Route::get('promoInfEst', [PromocionesController::class, 'promoInfEst'])->name('promoInfEst');
Route::get('promoObstetricia', [PromocionesController::class, 'promoObstetricia'])->name('promoObstetricia');
Route::get('promoPsiSex', [PromocionesController::class, 'promoPsiSex'])->name('promoPsiSex');
Route::delete('promociones/{promociones}', [PromocionesController::class, 'destroy'])->name('promociones.destroy');
//seguimiento
Route::get('seguimiento', [SeguimientoController::class, 'index'])->name('seguimiento');
Route::post('crearSeguimiento', [SeguimientoController::class, 'store'])->name('crearSeguimiento');
Route::post('crearConsulta', [ConsultasController::class, 'store'])->name('crearConsulta');
Route::get('verconsultas', [ConsultasController::class, 'index'])->name('verconsultas');
