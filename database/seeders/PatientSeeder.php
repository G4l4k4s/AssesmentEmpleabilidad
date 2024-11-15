<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $patients = [
            [
                'name' => 'Alice Johnson',
                'age' => '34',
                'birthdate' => '1989-06-15',
                'phone_number' => '+12345678901',
                'email' => 'alice.johnson@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Bob Smith',
                'age' => '42',
                'birthdate' => '1981-03-22',
                'phone_number' => '+12345678902',
                'email' => 'bob.smith@example.com',
                'password' => Hash::make('password123'),
                'role' => 'moderator',
            ],
            [
                'name' => 'Charlie Brown',
                'age' => '29',
                'birthdate' => '1994-11-09',
                'phone_number' => '+12345678903',
                'email' => 'charlie.brown@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Diana Prince',
                'age' => '36',
                'birthdate' => '1987-08-21',
                'phone_number' => '+12345678904',
                'email' => 'diana.prince@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Edward Norton',
                'age' => '45',
                'birthdate' => '1978-02-05',
                'phone_number' => '+12345678905',
                'email' => 'edward.norton@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Fiona Apple',
                'age' => '27',
                'birthdate' => '1996-01-19',
                'phone_number' => '+12345678906',
                'email' => 'fiona.apple@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'George Michael',
                'age' => '32',
                'birthdate' => '1991-07-13',
                'phone_number' => '+12345678907',
                'email' => 'george.michael@example.com',
                'password' => Hash::make('password123'),
                'role' => 'moderator',
            ],
            [
                'name' => 'Helen Mirren',
                'age' => '58',
                'birthdate' => '1965-04-29',
                'phone_number' => '+12345678908',
                'email' => 'helen.mirren@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Ian McKellen',
                'age' => '64',
                'birthdate' => '1959-09-17',
                'phone_number' => '+12345678909',
                'email' => 'ian.mckellen@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Jane Doe',
                'age' => '40',
                'birthdate' => '1983-12-11',
                'phone_number' => '+12345678910',
                'email' => 'jane.doe@example.com',
                'password' => Hash::make('password123'),
                'role' => 'moderator',
            ],
        ];

        foreach ($patients as $patient) {
            Patient::firstOrCreate(
                ['email' => $patient['email']], // Campo único para identificar duplicados
                $patient // Datos del paciente
            );
        }
    }
}
