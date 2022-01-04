<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "experience_year" => $this->faker->numberBetween(0, 60),
            "expertise" => $this->faker->word(),
        ];
    }
}
