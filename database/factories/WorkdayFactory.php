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
        $status = $this->faker->randomElement(['O', 'C', 'P']); //open closed paused
        $startWeek = Carbon::now()->subWeek()->startOfWeek();
        $endWeek   = Carbon::now()->subWeek()->endOfWeek();
        $start = $this->faker->dateTimeBetween($startWeek, $endWeek);
        $start_c = new Carbon($start);
        //$start = $date_c->addHours(rand(1, 23));
        $end =  $status != "O" ? $start_c->addHours(rand(8, 12)) : null;
        $minutes = $status != "O" ? $end->diffInMinutes($start) : null;
        /*
        $start = $this->faker->dateTimeBetween($date, '+1 day');
        $start_c = new Carbon($start);
        $end = $status != "O" ? $this->faker->dateTimeBetween($start, '+8 hour') : null;
        $end_c = new Carbon($end);
        $minutes = $status != "O" ? $end_c->diffInMinutes($start_c) : null;
        */
        return [
            'employee_uuid' => $employee_uuid,
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
