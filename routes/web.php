<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\CitaController;

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

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/seguimiento', function () {
    return view('seguimiento');
});

Route::get('/citas', function () {
    return view('citas');
});

Route::post('crear.cita', [CitaController::class, 'crearCita'])->name('crear.cita');
Route::get('cita-show', [CitaController::class, 'show'])->name('cita-show');
