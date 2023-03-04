<?php

namespace Database\Seeders;

use App\Models\EmployeeFile;
use Illuminate\Database\Seeder;

class EmployeeFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeFile::factory()
            ->count(100)
            ->create();
    }
}
