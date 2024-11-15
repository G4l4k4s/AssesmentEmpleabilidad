<!-- resources/views/doctors/edit.blade.php -->
@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Editar Paciente</h1>

        <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
            <form action="{{ route('doctors.update', $Doctor->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Name
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name', $Doctor->name) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Ingrese el nombre del paciente">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Specialrty
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name', $Doctor->specialty) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Ingrese el nombre del paciente">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Correo Electrónico
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email', $Doctor->email) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Ingrese el correo electrónico">
                    @error('email')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone Number Field -->
                <div class="mb-6">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        number phone
                    </label>
                    <input type="text" id="phone_number" name="phone_number"
                        value="{{ old('phone_number', $Doctor->phone_number) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Ingrese el número de teléfono">
                    @error('phone_number')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        Update medic
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
