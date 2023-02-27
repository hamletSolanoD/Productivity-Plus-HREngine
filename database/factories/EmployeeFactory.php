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
        /*
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        */
        $type = $this->faker->randomElement(['I', 'C', 'E']);
        $company_id = $type != "C" ? \App\Models\Company::factory()->create()->id : null;
        $company_uuid = $type != "C" ? \App\Models\Company::factory()->create()->uuid : null;
        $customer_id = $type != "I" ? \App\Models\Customer::factory()->create()->id : null;
        $customer_uuid = $type != "I" ?\App\Models\Customer::factory()->create()->uuid : null;
        $gender = $this->faker->randomElement(['M', 'F']);
        $firstname = $gender == 'M' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $rfc = $this->faker->boolean() ? $this->faker->bothify('RFC###???') : null;
        $curp = $this->faker->boolean() ? $this->faker->bothify('CURP###???') : null;
        $nss = $this->faker->boolean() ? $this->faker->bothify('NSS###???') : null;
        $fonacot = $this->faker->boolean();
        $fonacot_total = $fonacot ? $this->faker->numberBetween(1000,100000) : null;
        $fonacot_discount = $fonacot ? $fonacot_total / $this->faker->numberBetween(1,60) : null;
        $infonavit = $this->faker->boolean();    
        $infonavit_creditnumber =  $nss ? $this->faker->bothify('INF###???') : null;
        $infonavit_discount = $fonacot ? $this->faker->numberBetween(1,1600) : null;
        $infonavit_factor = $this->faker->randomElement(['VSM', 'UDIS', 'MXN']);
        $maritalstatus = $this->faker->randomElement(['S', 'M']);
        //S Single M Married
        $matrimonialregime =  $maritalstatus == 'M' ? $this->faker->randomElement(['SP', 'CS']) : null;
        //SP separate property Single CS conjugal society
        return [
            'uuid' => $this->faker->uuid(),
            'company_id' => $company_id,
            'company_uuid' => $company_uuid,
            'customer_id' => $customer_id,
            'customer_uuid' => $customer_uuid,
            'type' => $type,
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
            'curp' => $curp,
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
