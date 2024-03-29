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
        $type = $this->faker->randomElement(['a', 'b', 'e']);//A admin B employeer E employee
        $employee_id = null;
        $employee_uuid = null;
        $pin_activated = false;
        $pin = null;
        if($type == 'e'){            
            $employee = \App\Models\Employee::factory()->create();
            $employee_id = $employee->id;
            $employee_uuid = $employee->uuid;
            $pin_activated = $this->faker->boolean();
            $pin = $pin_activated ? random_int(100000,999999) : null;
        }
        $employer_id = null;
        $employer_uuid = null;
        if($type == 'b'){            
            $employer = \App\Models\Employer::factory()->create();
            $employer_id = $employer->id;
            $employer_uuid = $employer->uuid;
        }
        $email = $type == "e" ? $employee->email : $this->faker->email();
        $name = $type == "e" ? $employee->firstname." ".$employee->paternalsurname : $this->faker->firstName()." ".$this->faker->lastName();
        $uuid = $this->faker->uuid();
        $active = $this->faker->boolean();
        return [
            'uuid' => $uuid,
            'active' => $active,
            'pin_activated' => $pin_activated,
            'type' => $type, 
            'employee_id' => $employee_id, 
            'employee_uuid' => $employee_uuid, 
            'employer_id' => $employer_id, 
            'employer_uuid' => $employer_uuid, 
            'email' => $email,
            'name' => $name,
            'email_verified_at' => now(),
            'password' => Hash::make('Sist8293'), // password
            'remember_token' => Str::random(10),
            'pin' => $pin,
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
