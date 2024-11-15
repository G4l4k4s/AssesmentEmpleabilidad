<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $doctors = [
            [
                'name' => 'Dr. Alice Williams',
                'specialty' => 'Cardiology',
                'email' => 'alice.williams@example.com',
                'phone_number' => '+12345678901',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Bob Martinez',
                'specialty' => 'Neurology',
                'email' => 'bob.martinez@example.com',
                'phone_number' => '+12345678902',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Charlie Davis',
                'specialty' => 'Dermatology',
                'email' => 'charlie.davis@example.com',
                'phone_number' => '+12345678903',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Diana Wilson',
                'specialty' => 'Orthopedics',
                'email' => 'diana.wilson@example.com',
                'phone_number' => '+12345678904',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Edward Johnson',
                'specialty' => 'Pediatrics',
                'email' => 'edward.johnson@example.com',
                'phone_number' => '+12345678905',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Fiona Harris',
                'specialty' => 'Gastroenterology',
                'email' => 'fiona.harris@example.com',
                'phone_number' => '+12345678906',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. George Lee',
                'specialty' => 'Oncology',
                'email' => 'george.lee@example.com',
                'phone_number' => '+12345678907',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Helen Moore',
                'specialty' => 'Gynecology',
                'email' => 'helen.moore@example.com',
                'phone_number' => '+12345678908',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Ian Walker',
                'specialty' => 'Psychiatry',
                'email' => 'ian.walker@example.com',
                'phone_number' => '+12345678909',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Dr. Jane Taylor',
                'specialty' => 'Rheumatology',
                'email' => 'jane.taylor@example.com',
                'phone_number' => '+12345678910',
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::firstOrCreate(
                ['email' => $doctor['email']], // Campo único para identificar duplicados
                $doctor // Datos del doctor
            );
        }
    }
}
