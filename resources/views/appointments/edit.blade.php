@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 dark:text-gray-200 mb-8">Editar Cita</h1>

        <div class="max-w-lg mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
            <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Patient Selection -->
                <div class="mb-6">
                    <label for="patient_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Paciente
                    </label>
                    <select id="patient_id" name="patient_id" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                        <option value="">Seleccione un paciente</option>
                        @foreach($patients as $patient)
                            <option value="{{ $patient->id }}" {{ $patient->id == old('patient_id', $appointment->patient_id) ? 'selected' : '' }}>
                                {{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('patient_id')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Doctor Selection -->
                <div class="mb-6">
                    <label for="doctor_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Médico
                    </label>
                    <select id="doctor_id" name="doctor_id" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                        <option value="">Seleccione un médico</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ $doctor->id == old('doctor_id', $appointment->doctor_id) ? 'selected' : '' }}>
                                {{ $doctor->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('doctor_id')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date Field -->
                <div class="mb-6">
                    <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Fecha
                    </label>
                    <input type="date" id="date" name="date" value="{{ old('date', $appointment->date) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                    @error('date')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Time Field -->
                <div class="mb-6">
                    <label for="time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Hora
                    </label>
                    <input type="time" id="time" name="time" value="{{ old('time', $appointment->time) }}" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                    @error('time')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status Field -->
                <div class="mb-6">
                    <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Estado
                    </label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">
                        <option value="scheduled" {{ old('status', $appointment->status) == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                        <option value="completed" {{ old('status', $appointment->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="canceled" {{ old('status', $appointment->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                    @error('status')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Descripción
                    </label>
                    <textarea id="description" name="description" required
                        class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-gray-100">{{ old('description', $appointment->description) }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        Actualizar Cita
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
