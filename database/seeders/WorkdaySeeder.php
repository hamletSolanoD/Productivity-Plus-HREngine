<?php

namespace Database\Seeders;

use App\Models\Workday;
use Illuminate\Database\Seeder;

class WorkdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workday::factory()
            ->count(5)
            ->create();
    }
}
