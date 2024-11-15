<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ----------------------------------------------------------------
// Controller Methods patientsController
// ----------------------------------------------------------------
Route::get('/patients', [PatientsController::class, 'index'])->name('patients.index'); // Lista todos los patients
Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create'); // Formulario para crear un rol
Route::post('/patients', [PatientsController::class, 'store'])->name('patients.store'); // Guarda el nuevo rol
Route::get('/patients/{patient}', [PatientsController::class, 'show'])->name('patients.show'); // Muestra un rol específico
Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit'])->name('patients.edit'); // Formulario para editar un rol
Route::put('/patients/{patient}', [PatientsController::class, 'update'])->name('patients.update'); // Actualiza el rol existente
Route::delete('/patients/{patient}', [PatientsController::class, 'destroy'])->name('patients.destroy'); // Elimina el rol

// ----------------------------------------------------------------
// Controller Methods patientsController
// ----------------------------------------------------------------
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index'); // Lista todos los patients
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create'); // Formulario para crear un rol
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store'); // Guarda el nuevo rol
Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show'); // Muestra un rol específico
Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit'); // Formulario para editar un rol
Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update'); // Actualiza el rol existente
Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy'); // Elimina el rol

// ----------------------------------------------------------------
// Controller Methods appointmentController
// ----------------------------------------------------------------
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index'); // Lista todos los patients
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create'); // Formulario para crear un rol
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store'); // Guarda el nuevo rol
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show'); // Muestra un rol específico
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit'); // Formulario para editar un rol
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update'); // Actualiza el rol existente
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy'); // Elimina el rol


Route::get('/personal', [WelcomeController::class, 'index'])->name('welcome.index'); // Lista todos los patients

Route::get('/dashboard', function () {
    return view('layouts.personal');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
