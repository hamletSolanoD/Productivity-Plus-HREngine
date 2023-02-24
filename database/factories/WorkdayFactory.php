<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['O', 'C', 'P']); //open closed paused
        $employee_uuid = factory(App\Employee::class)->create()->uuid;
        $date = $this->faker->date();
        $start = $faker->dateTimeBetween($date, '+1 day');
        $end = $status != "O" ? $faker->dateTimeBetween($start, '+8 hour') : null;
        $minutes = $status != "O" ? $end->diffInMinutes($start) : null;
        return [
            'employee_uuid' => $employee_uuid,
            'status' => $status,
            'date' => $date,
            'start' => $start,
            'end' => $end,
            'minutes' => $minutes,
            'latitude' => $this->faker->Address()->latitude,
            'longitude' => $this->faker->Address()->longitude,
            'place' => $this->faker->Address()->street_name,
        ];
    }
}
