@extends('layouts.personal')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-10">All Appointments</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('appointments.create') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
            Add Appointment
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Patient Name
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Doctor Name
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Date
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Time
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-6 py-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-left text-sm font-semibold uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-gray-100 font-medium">{{ $appointment->patient->name }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->doctor->name }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->date }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->time }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-700 dark:text-gray-300">{{ $appointment->status }}</p>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <div class="flex space-x-4">
                                <a href="{{ route('appointments.edit', $appointment->id) }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-500 transition duration-300 ease-in-out">
                                    Edit
                                </a>
                                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
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
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                            No appointments found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    {{-- <div class="mt-6">
        {{ $appointments->links() }}
    </div> --}}
</div>
@endsection
