<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class WorkdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $employee_uuid = \App\Models\Employee::factory()->create()->uuid;
        $client_uuid = \App\Models\Employee::factory()->create()->client_uuid;
        $company_uuid = \App\Models\Employee::factory()->create()->company_uuid;
        $status = $this->faker->randomElement(['O', 'C']); //open closed
        $startWeek = Carbon::now()->subWeek()->startOfWeek();
        $endWeek   = Carbon::now()->subWeek()->endOfWeek();
        $start = $this->faker->dateTimeBetween($startWeek, $endWeek);
        $start_c = new Carbon($start);
        $end =  $status == "C" ? $start_c->addHours(rand(8, 12)) : null;
        $minutes = $status == "C" ? $end->diffInMinutes($start) : null;
        $uuid = $this->faker->uuid();
        return [
            'employee_uuid' => $employee_uuid,
            'client_uuid' => $client_uuid,
            'company_uuid' => $company_uuid,
            'uuid' => $uuid,
            'status' => $status,
            'date' => $start,
            'start' => $start,
            'end' => $end,
            'minutes' => $minutes,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'place' => $this->faker->address,
        ];
    }
}
