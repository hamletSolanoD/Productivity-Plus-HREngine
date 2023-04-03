<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $employer = \App\Models\Employer::factory()->create();
        $employer_id = $employer->id;
        $employer_uuid = $employer->uuid;
        $gender = $this->faker->randomElement(['m', 'f']);
        $firstname = $gender == 'm' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $rfc = $this->faker->boolean() ? $this->faker->bothify('RFC###???') : null;
        $nss = $this->faker->boolean() ? $this->faker->bothify('NSS###???') : null;
        $fonacot = $this->faker->boolean();
        $fonacot_total = $fonacot ? $this->faker->numberBetween(1000,100000) : null;
        $fonacot_discount = $fonacot ? $fonacot_total / $this->faker->numberBetween(1,60) : null;
        $infonavit = $this->faker->boolean();
        $infonavit_creditnumber =  $infonavit ? $this->faker->bothify('INF###???') : null;
        $infonavit_discount = $infonavit ? $this->faker->numberBetween(1,1600) : null;
        $infonavit_factor = $infonavit ? $this->faker->randomElement(['VSM', 'UDIS', 'MXN']) : null;
        $maritalstatus = $this->faker->randomElement(['s', 'm']);
        //S Single M Married
        $matrimonialregime =  $maritalstatus == 'm' ? $this->faker->randomElement(['sp', 'cs']) : null;
        //SP separate property Single CS conjugal society
        return [
            'uuid' => $this->faker->uuid(),
            'employer_id' => $employer_id,
            'employer_uuid' => $employer_uuid,
            //'type' => $type,
            'gender' => $gender,
            'firstname' => $firstname,
            'paternalsurname' => $this->faker->lastName(),
            'maternalsurname' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'birthdate' => $this->faker->date(),
            'birthstate' => $this->faker->state(),
            'matrimonialregime' => $matrimonialregime,
            'maritalstatus' => $maritalstatus,
            'rfc' => $rfc,
            'curp' => $this->faker->bothify('CURP###???'),
            'nss' => $nss,
            'fonacot' => $fonacot,
            'fonacot_total' => $fonacot_total,
            'fonacot_discount' => $fonacot_discount,
            'infonavit' => $infonavit,
            'infonavit_creditnumber' => $infonavit_creditnumber,
            'infonavit_discount' => $infonavit_discount,
            'infonavit_factor' => $infonavit_factor,
        ];
    }
}
