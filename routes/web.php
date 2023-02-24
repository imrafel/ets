<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignaController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/asistencia/curso', [App\Http\Controllers\AsistenciaController::class, 'curso'])->name('asistencias.curso');


Route::resource('curso', CursoController::class)->middleware('auth', 'role');

Route::resource('asigna', AsignaController::class)->middleware('auth', 'role');

Route::resource('alumno', AlumnoController::class)->middleware('auth', 'role');

Route::resource('jornada', JornadaController::class)->middleware('auth', 'role');

Route::resource('asistencia', AsistenciaController::class)->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

Route::resource('user', UserController::class)->middleware('auth', 'role');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
