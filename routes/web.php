<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Practicantes
    /*Route::resource('practicantes', PracticanteController::class);
    
    // Asistencias
    Route::resource('asistencias', AsistenciaController::class);
    
    // Documentos (solo Gerente RRHH)
    Route::resource('documentos', DocumentoController::class)
        ->middleware('role:Gerente RRHH');
    
    // Reportes (solo Gerente RRHH)
    Route::resource('reportes', ReporteController::class)
        ->middleware('role:Gerente RRHH');
    
    // Certificados (solo Gerente RRHH)
    Route::resource('certificados', CertificadoController::class)
        ->middleware('role:Gerente RRHH');
    
    // Usuarios (solo Gerente de Sistemas)
    Route::resource('usuarios', UsuarioController::class)
        ->middleware('role:Gerente de Sistemas');*/
});

require __DIR__.'/auth.php';
