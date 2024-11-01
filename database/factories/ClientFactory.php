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
    public function definition(): array
    {
        // Injetando na factory, nomes e emails fakes com o componente nativo do Laravel (faker)
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
