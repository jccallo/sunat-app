<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'document_type' => $this->faker->randomElement(['DNI', 'RUC', 'CE', 'Pasaporte']),
            'document_number' => $this->faker->unique()->randomNumber(8, true),
            'fullname' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'cellphone' => $this->faker->unique()->e164PhoneNumber(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'district_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),
        ];
    }
}
