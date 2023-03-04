<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {        
        $activity_id = \App\Models\Activity::factory()->create()->id;
        $activity_uuid = \App\Models\Activity::factory()->create()->uuid;
        $file = $this->faker->randomElement(['rfc', 'curp', 'nss', 'fonacot', 'infonavit', 'bankcontract', 'jobapplication', 'birthcertificate', 'studycertificate', 'proofofaddress', 'workcontract', 'workregulation', 'bankpolicy', 'idcard', 'infonavitprequalification', 'fonacotdisclaimer', 'agreementformat', 'settlementreceipt', 'administrativerecord']);
        return [
            'activity_id' => $activity_id,
            'activity_uuid' => $activity_uuid,
            'uuid' => $this->faker->uuid(),
            'file' => $file,
            'checked' => $this->faker->boolean(),
        ];
    }
}
