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
        /*
        'rfc',
        'curp',
        'nss',
        'fonacot',
        'infonavit',
        'bankcontract',
        'jobapplication',
        'birthcertificate',
        'studycertificate',
        'proofofaddress',
        'workcontract',
        'workregulation',
        'bankpolicy',
        'idcard',
        'infonavitprequalification',
        'fonacotdisclaimer',
        'agreementformat',
        'settlementreceipt',
        'administrativerecord',
        */        
        $employee_id = \App\Models\Employee::factory()->create()->id;
        $employee_uuid = \App\Models\Employee::factory()->create()->uuid;
        $file = $this->faker->randomElement(['rfc', 'curp', 'nss', 'fonacot', 'infonavit', 'bankcontract', 'jobapplication', 'birthcertificate', 'studycertificate', 'proofofaddress', 'workcontract', 'workregulation', 'bankpolicy', 'idcard', 'infonavitprequalification', 'fonacotdisclaimer', 'agreementformat', 'settlementreceipt', 'administrativerecord']);
        //$count = DB::table('employee_files')->where('file', $file)->count();
        return [
            'employee_id' => $employee_id,
            'employee_uuid' => $employee_uuid,
            'file' => $file,
            //'count' => $count,
            'checked' => $this->faker->boolean(),
            'uuid' => $this->faker->uuid(),
        ];
    }
}
