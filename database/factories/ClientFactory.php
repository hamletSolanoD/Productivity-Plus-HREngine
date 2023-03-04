<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I' ? $this->faker->name() : $this->faker->company();
        $gender = $type == 'I' ? $this->faker->randomElement(['M', 'F']) : null;
        $firstname = $type == 'I'? $gender == 'M' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale() : null;
        $paternalsurname = $type == 'I' ? $this->faker->lastName() : null;
        $maternalsurname = $type == 'I' ?$this->faker->lastName() : null;
        $date = $this->faker->date();
        $legalrepresentative = $type == 'B' ? $this->faker->name() : null;
        return [
            'uuid' => $this->faker->uuid(),
            'type' => $type,
            'rfc' => $this->faker->bothify('RFC###???'),            
            'firstname' => $firstname,
            'paternalsurname' => $paternalsurname,
            'maternalsurname' => $maternalsurname,
            'gender' => $gender,
            'birthdate' => $date,
            'employerregistry' => $this->faker->bothify('A83###???'),
            'businessname' => $this->faker->company(),
            'tradename' => $this->faker->company(),
            'legalrepresentative' => $legalrepresentative,
            'phone' => $this->faker->phoneNumber(),
            'email'=> $this->faker->email(),
        ];
    }
}
