<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index'); // Lista todos los patients
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create'); // Formulario para crear un rol
Route::post('/patients', [PatientsController::class, 'store'])->name('patients.store'); // Guarda el nuevo rol
Route::get('/patients/{patient}', [PatientsController::class, 'show'])->name('patients.show'); // Muestra un rol específico
Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit'])->name('patients.edit'); // Formulario para editar un rol
Route::put('/patients/{patient}', [PatientsController::class, 'update'])->name('patients.update'); // Actualiza el rol existente
Route::delete('/patients/{patient}', [PatientsController::class, 'destroy'])->name('patients.destroy'); // Elimina el rol



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
