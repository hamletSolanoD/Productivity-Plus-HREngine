<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CustomerSeeder::class,            
            EmployeeSeeder::class,
            ClientSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            WorkdaySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
