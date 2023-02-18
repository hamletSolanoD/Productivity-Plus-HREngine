<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'rfc' => $this->faker->bothify('RFC###???'),
            'employerregistry' => $this->faker->email(),
            'businessname' => $this->faker->company(),
            'tradename' => $this->faker->company(),
            'legalrepresentative' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email'=> $this->faker->email(),
        ];
    }
}
