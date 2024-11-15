<!-- resources/views/patients/edit.blade.php -->
@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Editar Paciente</h1>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Name
                </label>
                <input type="text" id="name" name="name" value="{{ old('name', $patient->name) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                    placeholder="Ingrese el nombre del paciente">
                @error('name')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Age Field -->
            <div class="mb-6">
                <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Edad
                </label>
                <input type="text" id="age" name="age" value="{{ old('age', $patient->age) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                    placeholder="Ingrese la edad del paciente">
                @error('age')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Birthdate Field -->
            <div class="mb-6">
                <label for="birthdate" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Fecha de Nacimiento
                </label>
                <input type="date" id="birthdate" name="birthdate" value="{{ \Carbon\Carbon::parse($patient->birthdate)->format('d/m/Y') }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                @error('birthdate')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Número de Teléfono
                </label>
                <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $patient->phone_number) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                    placeholder="Ingrese el número de teléfono">
                @error('phone_number')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Correo Electrónico
                </label>
                <input type="email" id="email" name="email" value="{{ old('email', $patient->email) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                    placeholder="Ingrese el correo electrónico">
                @error('email')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
{{-- 
            <!-- Role Field -->
            <div class="mb-6">
                <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Rol
                </label>
                <input type="text" id="role" name="role" value="{{ old('role', $patient->role) }}" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                    placeholder="Ingrese el rol del paciente">
                @error('role')
                    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div> --}}

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Actualizar Paciente
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
