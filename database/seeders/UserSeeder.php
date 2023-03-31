<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Faker\Generator;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);
        $employee = \App\Models\Employee::factory()->create();
        $employee_id = $employee->id;
        $employee_uuid = $employee->uuid;
        $employer = \App\Models\Employer::factory()->create();
        $employer_id = $employer->id;
        $employer_uuid = $employer->uuid;
        $user = User::create([
            'active' => true,
            'type' => 'e', 
            'employee_id' => $employee_id,
            'employee_uuid' => $employee_uuid,
            'uuid' => $faker->uuid(),
            'name' => 'Employee', 
            'email' => 'employee@gmail.com',
            'password' => Hash::make('Sist8293')
        ]);
        $user = User::create([
            'active' => true,
            'type' => 'b', 
            'employer_id' => $employer_id,
            'employer_uuid' => $employer_uuid,
            'uuid' => $faker->uuid(),
            'name' => 'Employer', 
            'email' => 'employer@gmail.com',
            'password' => Hash::make('Sist8293')
        ]);
        $user = User::create([
            'active' => true,
            'type' => 'a',
            'uuid' => $faker->uuid(),
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Sist8293')
        ]);
    }
}
