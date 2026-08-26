<?php

namespace Database\Seeders;

use App\Models\WorkSpace;
use Illuminate\Database\Seeder;

class WorkSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkSpace::factory()
            ->count(2)
            ->create();
    }
}
