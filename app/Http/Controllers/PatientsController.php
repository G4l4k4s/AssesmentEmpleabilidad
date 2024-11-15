<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
 * Display a listing of the resource.
 */
public function index()
{
    $patients = Patient::all();
    return view('patients.index', compact('patients'));
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('patients.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'age' => 'required|integer',
        'birthdate' => 'required|date',
        'phone_number' => 'required|string|unique:patients',
        'email' => 'required|string|email|unique:patients',
        'password' => 'required|string',
        'role' => 'string|default:user',
    ]);

    $patient = Patient::create($validatedData);
    return redirect()->route('patients.show', $patient->id);
}

/**
 * Display the specified resource.
 */
public function show(Patient $patient)
{
    return view('patients.show', compact('patient'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(Patient $patient)
{
    return view('patients.edit', compact('patient'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Patient $patient)
{
    $validatedData = $request->validate([
        'name' => '|string',
        'age' => '|integer',
        'birthdate' => 'nullable|date',
        'phone_number' => '|string|unique:patients,phone_number,'.$patient->id,
        'email' => '|string|email|unique:patients,email,'.$patient->id,
        'password' => '|string',
        'role' => 'string|default:user',
    ]);

    $patient->update($validatedData);
    return redirect()->route('patients.show', $patient->id);
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Patient $patient)
{
    $patient->delete();
    return redirect()->route('patients.index');
}
}
