<?php

use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use App\Models\Puesto;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

// Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
// Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
// Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
// Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
// Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
// Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
// Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::resource("alumnos",AlumnoController::class);

// Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
// Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
// Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
// Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
// Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
// Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
// Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

Route::resource("puestos",PuestoController::class);

// Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
// Route::get('/plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
// Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
// Route::post('/plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');
// Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
// Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');
// Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');

Route::resource("plazas",PlazaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
