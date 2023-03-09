<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $active = $this->faker->boolean();
        $outsource = $this->faker->boolean();
        $persontype = $this->faker->randomElement(['F', 'M']);//F Fisica M Moral
        $name = $persontype == 'F' ? $this->faker->name() : $this->faker->company();
        $gender = $persontype == 'F' ? $this->faker->randomElement(['M', 'F']) : null;
        $firstname = $persontype == 'F'? $gender == 'M' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale() : null;
        $paternalsurname = $persontype == 'F' ? $this->faker->lastName() : null;
        $maternalsurname = $persontype == 'F' ?$this->faker->lastName() : null;
        $date = $this->faker->date();
        $legalrepresentative = $persontype == "M" ? $this->faker->name() : null;
        $outsourceat = $outsource ? $this->faker->company() : null;
        return [
            'active' => $active,
            'outsource' => $outsource,
            'uuid' => $this->faker->uuid(),
            'persontype' => $persontype,
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
            'outsourceat'=> $outsourceat,
        ];
    }
}
