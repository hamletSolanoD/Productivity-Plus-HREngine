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
        $employer_id = \App\Models\Employer::factory()->create()->id;
        $employer_uuid = \App\Models\Employer::factory()->create()->uuid;
        $employee_id = \App\Models\Employee::factory()->create()->id;
        $employee_uuid = \App\Models\Employee::factory()->create()->uuid;
        $status = $this->faker->randomElement(['O', 'C']); //open closed
        $startWeek = Carbon::now()->subWeek()->startOfWeek();
        $endWeek   = Carbon::now()->subWeek()->endOfWeek();
        $start = $this->faker->dateTimeBetween($startWeek, $endWeek);
        $start_c = new Carbon($start);
        $end =  $status == "C" ? $start_c->addHours(rand(8, 12)) : null;
        $minutes = $status == "C" ? $end->diffInMinutes($start) : null;
        $uuid = $this->faker->uuid();
        return [
            'employer_id' => $employer_id,
            'employer_uuid' => $employer_uuid,
            'employee_id' => $employee_id,
            'employee_uuid' => $employee_uuid,
            'uuid' => $uuid,
            'status' => $status,
            'date' => $start,
            'start' => $start,
            'end' => $end,
            'minutes' => $minutes,
            'timezone' => 'America/Denver',
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'place' => $this->faker->address,
        ];
    }
}
