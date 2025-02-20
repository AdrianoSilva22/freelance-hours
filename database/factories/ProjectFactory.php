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
            'description' => 'oi',
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'tech_stack' => fake()->randomElements(['react', 'vite', 'javascript', 'nextjs', 'nodejs'], random_int(1,5)),
            'created_by' => User::factory(),
        ];
    }
}
