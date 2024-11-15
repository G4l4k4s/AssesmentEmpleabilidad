<!-- resources/views/patients/create.blade.php -->
@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Create a New Patient</h1>

        <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
            <form action="{{ route('patients.store') }}" method="POST">
                @csrf

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Full Name
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Enter the patient's name">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- specialty Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Medic specialty
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Enter the patient's name">
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Enter the patient's email address">
                    @error('email')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone Number Field -->
                <div class="mb-6">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Phone Number
                    </label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Enter the patient's phone number">
                    @error('phone_number')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Password
                    </label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100"
                        placeholder="Enter a password">
                    @error('password')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        Save Medic
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
