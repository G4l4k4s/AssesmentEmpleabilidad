<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
 * Display a listing of the resource.
 */
public function index()
{
    $doctors = Doctor::all();
    return view('doctors.index', compact('doctors'));
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('doctors.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'speciality' => 'required|integer',
        'email' => 'required|string|email|unique:doctors',
        'phone_number' => 'required|string|unique:doctors',
        'password' => 'required|string',
    ]);

    $Doctor = Doctor::create($validatedData);
    return redirect()->route('doctors.show', $Doctor->id);
}

/**
 * Display the specified resource.
 */
public function show(Doctor $Doctor)
{
    return view('doctors.show', compact('Doctor'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(Doctor $Doctor)
{
    return view('doctors.edit', compact('Doctor'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Doctor $Doctor)
{
    $validatedData = $request->validate([
        'name' => '|string',
        'speciality' => '|integer',
        'email' => '|string|email|unique:patients,email,'.$Doctor->id,
        'phone_number' => '|string|unique:patients,phone_number,'.$Doctor->id,
        'password' => '|string',
    ]);

    $Doctor->update($validatedData);
    return redirect()->route('doctors.show', $Doctor->id);
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Doctor $Doctor)
{
    $Doctor->delete();
    return redirect()->route('doctors.index');
}}
