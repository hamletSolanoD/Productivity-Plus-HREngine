<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {               
        $employee_id = \App\Models\Employee::factory()->create()->id;
        $employee_uuid = \App\Models\Employee::factory()->create()->uuid;
        $email = \App\Models\Employee::factory()->create()->email;
        $firstname = \App\Models\Employee::factory()->create()->firstname;
        $paternalsurname = \App\Models\Employee::factory()->create()->paternalsurname;
        return [
            'uuid' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'type' => 'e', 
            'employee_id' => $employee_id, 
            'employee_uuid' => $employee_uuid, 
            'email' => $email,
            'name' => $firstname." ".$paternalsurname,
            'email_verified_at' => now(),
            'password' => Hash::make('Sist8293'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
