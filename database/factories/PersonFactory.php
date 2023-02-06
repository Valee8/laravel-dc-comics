<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake() -> firstName($gender = null),
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> date(),
            'height' => fake() -> randomFloat(2, 1.4, 2),
        ];
    }
}
