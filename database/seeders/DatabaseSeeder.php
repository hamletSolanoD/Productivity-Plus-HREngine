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
            EmployerSeeder::class,
            EmployeeSeeder::class,
            WorkdaySeeder::class,
            EmployeeFileSeeder::class,
            ActivitySeeder::class,
            ActivityFileSeeder::class,
            UserSeeder::class,
            //CustomerSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
