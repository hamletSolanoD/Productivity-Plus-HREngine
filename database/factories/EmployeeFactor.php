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
        $maritalstatus = $this->faker->randomElement(['S', 'M']);
        $matrimonialregime =  $maritalstatus == 'M' ? $this->faker->randomElement(['CP', 'SP']) : null;
        $gender = $faker->randomElement('M', 'F');
        $firstname = $gender == 'M' ? $this->faker->firstNameMale() :$this->faker->firstNameFemale();
        $rfc = $faker->randomElement(true, false);        
        $rfc_value = $rfc ? $faker->bothify('RFC###???') : null;
        $rfc_uuid = $rfc ? $faker->uuid() : null;
        /*
        'curp',
        'curp_value',
        'curp_guid',
        'nss',
        'nss_value',
        'nss_guid',
        'fonacot',
        'fonacot_total',
        'fonacot_discount',
        'fonacot_guid',
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
        'infonavit_guid',
        'bankcontract',
        'bankcontract_interbankkey',
        'bankcontract_guid',
        'jobapplication',
        'jobapplication_guid',
        'birthcertificate',
        'birthcertificate_guid',
        'studycertificate',
        'studycertificate_guid',
        'proofofaddress',
        'proofofaddress_guid',
        'workcontract',
        'workcontract_guid',
        'workregulation',
        'workregulation_guid',
        'bankpolicy',
        'bankpolicy_guid',
        'id',
        'id_guid',
        'infonavitprequalification',
        'infonavitprequalification_guid',
        'fonacotdisclaimer',
        'fonacotdisclaimer_guid',
        'agreementformat',
        'agreementformat_guid',
        'settlementreceipt',
        'settlementreceipt_guid',
        'administrativerecord',
        'administrativerecord_guid',
        */
        return [
            'employee_guid' => $faker->uuid(),
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
