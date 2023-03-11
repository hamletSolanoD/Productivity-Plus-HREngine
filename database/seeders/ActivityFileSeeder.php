<?php

namespace Database\Seeders;

use App\Models\ActivityFile;
use Illuminate\Database\Seeder;

class ActivityFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityFile::factory()
            ->count(10)
            ->create();
    }
}
