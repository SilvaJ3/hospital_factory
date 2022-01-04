<?php

namespace Database\Factories;

use App\Models\Hospital;
use App\Models\Local_type;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        do {
            $hopital = Hospital::inRandomOrder()->first();
        } while ($hopital->locals()->count() > 80);

        return [
            "name" => $this->faker->numerify('local###'),
            "local_types_id" => Local_type::inRandomOrder()->first(),
            "hospital_id" => $hopital->id,
        ];
    }
}
