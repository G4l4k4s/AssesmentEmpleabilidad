<!-- resources/views/Doctors/show.blade.php -->
@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Doctor Details</h1>

    <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Full Name
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $Doctor->name }}</p>
        </div>

        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Specialty
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $Doctor->specialty }}</p>
        </div>

        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Email Address
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $Doctor->email }}</p>
        </div>

        <div class="mb-6">
            <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Phone Number
            </label>
            <p class="text-gray-700 dark:text-gray-300">{{ $Doctor->phone_number }}</p>
        </div>


        <!-- If you want to add a back button -->
        <div class="flex justify-end mt-6">
            <a href="{{ route('doctors.index') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                Back to Doctors List
            </a>
        </div>
    </div>
</div>
@endsection
