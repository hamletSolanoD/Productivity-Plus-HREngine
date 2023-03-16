<?php

namespace Database\Factories;

use App\Models\EmployeeFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class EmployeeFileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $employee = \App\Models\Employee::factory()->create();
        $employee_id = $employee->id;
        $employee_uuid = $employee->uuid;
        $document = $this->faker->randomElement(['rfc', 'curp', 'nss', 'fonacot', 'infonavit', 'bankcontract', 'jobapplication', 'birthcertificate', 'studycertificate', 'proofofaddress', 'workcontract', 'workregulation', 'bankpolicy', 'idcard', 'infonavitprequalification', 'fonacotdisclaimer', 'agreementformat', 'settlementreceipt', 'administrativerecord']);        
        $extension = $this->faker->randomElement(['png','jpeg','gif','ppt','pptx','doc','docx','pdf','xls','xlsx','zip']);
        return [
            'employee_id' => $employee_id,
            'employee_uuid' => $employee_uuid,
            'uuid' => $this->faker->uuid(),
            'document' => $document,
            'checked' => $this->faker->boolean(),
            'extension' => $extension
        ];
    }
}
