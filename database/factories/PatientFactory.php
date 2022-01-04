<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Address;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "register_id" => $this->faker->randomNumber(8, true),
            "fname" => $this->faker->firstName(),
            "lname" => $this->faker->lastName(),
            "birth_date" => $this->faker->dateTimeBetween(),
            "gender" => $this->faker->randomElement(['F', 'M']),
            "adress" => $this->faker->streetAddress(),
            "country" => $this->faker->country(),
            "city" => $this->faker->city(),
            "postcode" => Address::postcode(),
            "phone" => $this->faker->phoneNumber(),
            "contact_person" => $this->faker->name(),
            "contact_phone" => $this->faker->phoneNumber(),
        ];
    }
}
