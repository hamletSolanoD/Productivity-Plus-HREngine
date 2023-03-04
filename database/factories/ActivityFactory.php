<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*        
            $table->string('uuid');
            $table->string('type');
            $table->string('status');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->string('description');
        */
        $activity_id = \App\Models\Activity::factory()->create()->id;
        $activity_uuid = \App\Models\Activity::factory()->create()->uuid;
        $activity_start = \App\Models\Activity::factory()->create()->start;
        $type = $this->faker->randomElement(['W', 'B']);//W Work B Brake $activity_start
        $end =  $status == "C" ? $start_c->addHours(rand(8, 12)) : null;
        $minutes = $status == "C" ? $end->diffInMinutes($start) : null;
        return [
            'activity_id' => $activity_id,
            'activity_uuid' => $activity_uuid,
            'uuid' => $this->faker->uuid(),
            'type' => $type,
            'start' => $file,
            'end' => $file,
            'description' => $this->faker->boolean(),
        ];
    }
}
