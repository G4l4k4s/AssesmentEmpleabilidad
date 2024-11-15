<!-- resources/views/patients/show.blade.php -->
@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Patient Details</h1>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Full Name
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $patient->name }}</p>
        </div>

        <div class="mb-6">
            <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Age
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $patient->age }}</p>
        </div>

        <div class="mb-6">
            <label for="birthdate" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Birthdate
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ \Carbon\Carbon::parse($patient->birthdate)->format('d/m/Y') }}</p>
        </div>

        <div class="mb-6">
            <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Phone Number
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $patient->phone_number }}</p>
        </div>

        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Email Address
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $patient->email }}</p>
        </div>

        <div class="mb-6">
            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Role
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $patient->role }}</p>
        </div>

        <!-- If you want to add a back button -->
        <div class="flex justify-end mt-6">
            <a href="{{ route('patients.index') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                Back to Patients List
            </a>
        </div>
    </div>
</div>
@endsection
