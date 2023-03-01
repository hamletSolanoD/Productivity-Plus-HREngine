<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'active' => true,
            'type' => 'e', 
            'employee_id' => 1,            
            'uuid' => '18432dbc-b872-11ed-afa1-0242ac120002',  
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Sist8293')
        ]);
    }
}
