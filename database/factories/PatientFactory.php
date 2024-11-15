<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1, 100), // Edad entre 1 y 100
            'birthdate' => $this->faker->dateTimeBetween('-100 years', '-1 year')->format('Y-m-d'), // Fecha de nacimiento
            'phone_number' => $this->faker->unique()->e164PhoneNumber, // Número de teléfono único
            'email' => $this->faker->unique()->safeEmail, // Correo único
            'password' => bcrypt('password'), // Contraseña predeterminada cifrada
            'role' => $this->faker->randomElement(['user', 'admin', 'moderator']), // Roles posibles
        ];
    }
}
