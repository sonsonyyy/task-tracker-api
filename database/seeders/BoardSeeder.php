<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Workspace;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Board::factory()
            ->count(2)
            ->for(Workspace::factory())
            ->hasCards(
                ['title' => 'Pending'],
                ['title' => 'On-going'],
                ['title' => 'Done'],
            )
            ->create();
    }
}
