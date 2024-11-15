<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Obtener algunos pacientes y doctores existentes
        $patients = Patient::all();
        $doctors = Doctor::all();

        // Verificar si hay suficientes pacientes y doctores
        if ($patients->count() < 5 || $doctors->count() < 5) {
            $this->command->error('No hay suficientes pacientes o doctores para crear citas.');
            return;
        }

        $appointments = [
            [
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'date' => Carbon::now()->addDays(1)->toDateString(),
                'time' => '10:00:00',
                'status' => 'confirmed',
                'description' => 'Consulta general',
            ],
            [
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'date' => Carbon::now()->addDays(2)->toDateString(),
                'time' => '14:30:00',
                'status' => 'pending',
                'description' => 'Revisión de resultados',
            ],
            [
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'date' => Carbon::now()->addDays(3)->toDateString(),
                'time' => '09:00:00',
                'status' => 'confirmed',
                'description' => 'Consulta de emergencia',
            ],
            [
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'date' => Carbon::now()->addDays(4)->toDateString(),
                'time' => '16:00:00',
                'status' => 'canceled',
                'description' => 'Cancelación de cita',
            ],
            [
                'patient_id' => $patients->random()->id,
                'doctor_id' => $doctors->random()->id,
                'date' => Carbon::now()->addDays(5)->toDateString(),
                'time' => '11:30:00',
                'status' => 'confirmed',
                'description' => 'Consulta de seguimiento',
            ],
        ];

        foreach ($appointments as $appointment) {
            Appointment::firstOrCreate([
                'patient_id' => $appointment['patient_id'],
                'doctor_id' => $appointment['doctor_id'],
                'date' => $appointment['date'],
                'time' => $appointment['time'],
                'status' => $appointment['status'],
                'description' => $appointment['description'],
            ]);
        }
    }
}
