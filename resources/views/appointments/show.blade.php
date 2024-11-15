@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Appointment Details</h1>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
        <!-- Patient Details -->
        <div class="mb-6">
            <label for="patient_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Patient Name
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->patient->name }}</p>
        </div>

        <!-- Doctor Details -->
        <div class="mb-6">
            <label for="doctor_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Doctor Name
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->doctor->name }}</p>
        </div>

        <!-- Appointment Date -->
        <div class="mb-6">
            <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Date
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->date }}</p>
        </div>

        <!-- Appointment Time -->
        <div class="mb-6">
            <label for="time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Time
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->time }}</p>
        </div>

        <!-- Appointment Status -->
        <div class="mb-6">
            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Status
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->status }}</p>
        </div>

        <!-- Appointment Description -->
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Description
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->description }}</p>
        </div>

        <!-- Back Button -->
        <div class="flex justify-end mt-6">
            <a href="{{ route('appointments.index') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                Back to Appointments List
            </a>
        </div>
    </div>
</div>
@endsection
