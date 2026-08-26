<?php

namespace Database\Factories;

use App\Models\WorkSpace;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WorkSpace>
 */
class WorkSpaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'description' => fake()->text(25),
        ];
    }
}
