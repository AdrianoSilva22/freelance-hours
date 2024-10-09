<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'tech_stack' => fake()->randomElements(['react', 'vue', 'php', 'tailwind', 'javascript', 'nextjs', 'python'], random_int(1,5)),
            'created_by' => User::factory(),
        ];
    }
}
