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
        $employee = \App\Models\Employee::factory()->create();
        $employee_id = $employee->id;
        $employee_uuid = $employee->uuid;
        $email = $employee->email;
        $firstname = $employee->firstname;
        $paternalsurname = $employee->paternalsurname;
        $uuid = $this->faker->uuid();
        $active = $this->faker->active();
        return [
            'uuid' => $uuid,
            'active' => $active,
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
