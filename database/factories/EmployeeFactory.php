<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;

    public function definition()
    {        
        $gender = $this->faker->randomElement(['M', 'F']);
        $firstname = $gender == 'M' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $rfc = $this->faker->randomElement([true, false]);
        $rfc_value = $rfc ? $this->faker->bothify('RFC###???') : null;
        $rfc_uuid = $rfc ? $this->faker->uuid() : null;
        $curp = $this->faker->randomElement([true, false]);
        $curp_value = $curp ? $this->faker->bothify('CURP###???') : null;
        $curp_uuid = $curp ? $this->faker->uuid() : null;
        $nss = $this->faker->randomElement([true, false]);
        $nss_value = $nss ? $this->faker->bothify('NSS###???') : null;
        $nss_uuid = $nss ? $this->faker->uuid() : null;
        $fonacot = $this->faker->randomElement([true, false]);
        $fonacot_total = $fonacot ? $this->faker->randomFloat(2) : null;
        $fonacot_discount = $fonacot ? $this->faker->randomFloat(2) : null;
        $fonacot_uuid = $fonacot ? $this->faker->uuid() : null;
        $maritalstatus = $this->faker->randomElement(['S', 'M']);
        //S Single M Married
        $matrimonialregime =  $maritalstatus == 'M' ? $this->faker->randomElement(['SP', 'CS']) : null;
        //SP separate property Single CS conjugal society
        /*
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
        'infonavit_uuid',
        'bankcontract',
        'bankcontract_interbankkey',
        'bankcontract_uuid',
        'jobapplication',
        'jobapplication_uuid',
        'birthcertificate',
        'birthcertificate_uuid',
        'studycertificate',
        'studycertificate_uuid',
        'proofofaddress',
        'proofofaddress_uuid',
        'workcontract',
        'workcontract_uuid',
        'workregulation',
        'workregulation_uuid',
        'bankpolicy',
        'bankpolicy_uuid',
        'id',
        'id_uuid',
        'infonavitprequalification',
        'infonavitprequalification_uuid',
        'fonacotdisclaimer',
        'fonacotdisclaimer_uuid',
        'agreementformat',
        'agreementformat_uuid',
        'settlementreceipt',
        'settlementreceipt_uuid',
        'administrativerecord',
        'administrativerecord_uuid',
        */
        return [
            'uuid' => $this->faker->uuid(),
            'firstname' => $firstname,
            'paternalsurname' => $this->faker->lastName(),
            'maternalsurname' => $this->faker->lastName(),
            'gender' => $gender,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'birthdate' => $this->faker->date(),
            'birthstate' => $this->faker->state(),
            'matrimonialregime' => $matrimonialregime,
            'maritalstatus' => $maritalstatus,
            'rfc' => $rfc,
            'rfc_value' => $rfc_value,
            'rfc_uuid' => $rfc_uuid,
            'curp' => $curp,
            'curp_value' => $curp_value,
            'curp_uuid' => $curp_uuid,
            'nss' => $nss,
            'nss_value' => $nss_value,
            'nss_uuid'=> $nss_uuid,
            'fonacot' => $fonacot,
            'fonacot_total' => $fonacot_total,
            'fonacot_discount' => $fonacot_discount,
            'fonacot_uuid' => $fonacot_uuid,
        ];
        /*
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        'company_id',
        'company_guid',
        'customer_id',
        */
    }
}
