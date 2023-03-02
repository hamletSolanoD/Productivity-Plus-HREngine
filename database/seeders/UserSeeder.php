<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_id = \App\Models\Employee::factory()->create()->id;
        $employee_uuid = \App\Models\Employee::factory()->create()->uuid;
        $user = User::create([
            'active' => true,
            'type' => 'e', 
            'employee_id' => $employee_id,
            'employee_uuid' => $employee_uuid,
            'uuid' => $this->faker->uuid(),
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Sist8293')
        ]);
    }
}
