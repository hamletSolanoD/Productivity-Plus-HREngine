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
        $latitude_end = $status == "C" ? $this->faker->latitude : null;
        $longitude_end = $status == "C" ? $this->faker->longitude : null;
        $place_end = $status == "C" ? $this->faker->address : null;
        return [
            'workday_id' => $workday_id,
            'workday_uuid' => $workday_uuid,
            'uuid' => $this->faker->uuid(),
            'type' => $type,
            'status' => $status,
            'start' => $start,
            'date' => $start_c->format("Y-m-d"),
            'end' => $end,
            'minutes' => $minutes,
            'timezone' => 'America/Denver',
            'description' => $this->faker->boolean() ? $this->faker->sentence() : null,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'place' => $this->faker->address,
            'latitude_end' => $latitude_end,
            'longitude_end' => $longitude_end,
            'place_end' => $address_end,
        ];
    }
}
