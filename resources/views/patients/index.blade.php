@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-10">All Patients</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('patients.create') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
            Add Patient
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Age
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Birthdate
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Phone Number
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Email
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Role
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-gray-100 font-medium">{{ $patient->name }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $patient->age }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ \Carbon\Carbon::parse($patient->birthdate)->format('d/m/Y') }}</p>

                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $patient->phone_number }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $patient->email }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $patient->role }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <div class="flex space-x-4">
                                <a href="{{ route('patients.edit', $patient->id) }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-500 transition duration-300 ease-in-out">
                                    Edit
                                </a>
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this patient?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-500 transition duration-300 ease-in-out">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                            No patients found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    {{-- <div class="mt-6">
        {{ $patients->links() }}
    </div> --}}
</div>
@endsection
