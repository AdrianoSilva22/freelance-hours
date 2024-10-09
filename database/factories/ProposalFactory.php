<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProposalFactory extends Factory
{

    public function definition(): array
    {
        return [
            'email' => fake()->safeEmail(),
            'hours' => fake()->numberBetween(1,120),
            'project_id' => Project::factory(),
        ];
    }
}
