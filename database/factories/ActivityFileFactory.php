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
        $activity = \App\Models\Activity::factory()->create();
        $activity_id = $activity->id;
        $activity_uuid = $activity->uuid;
        return [
            'activity_id' => $activity_id,
            'activity_uuid' => $activity_uuid,
            'uuid' => $this->faker->uuid(),
            'extension' => $this->faker->fileExtension()
        ];
    }
}
