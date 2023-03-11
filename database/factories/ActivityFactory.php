<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $workday = \App\Models\Workday::factory()->create();
        $workday_id = $workday->id;
        $workday_uuid = $workday->uuid;
        $type = $this->faker->randomElement(['W', 'B']);//W Work B Brake brake
        $status = $this->faker->randomElement(['O', 'C']);//O Open C Close
        $workday_start_c = new Carbon($workday->start);
        $workday_end = empty($workday->end)? $workday_start_c->addHours(rand(8, 12))  :$workday->start;
        $start = $this->faker->dateTimeBetween($workday->start, $workday_end);
        $start_c = new Carbon($start);
        $end =  $status == "C" ? $start_c->addHours(rand(1, 4)) : null;
        $minutes = $status == "C" ? $end->diffInMinutes($start) : null;
        return [
            'workday_id' => $workday_id,
            'workday_uuid' => $workday_uuid,
            'uuid' => $this->faker->uuid(),
            'type' => $type,
            'status' => $status,
            'start' => $start,
            'end' => $end,
            'minutes' => $minutes,
            'timezone' => 'America/Denver',
            'description' => $this->faker->uuid() ? $this->faker->sentence() : null,
        ];
    }
}
