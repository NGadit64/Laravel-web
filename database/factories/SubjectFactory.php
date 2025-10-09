<?php

namespace Database\Factories;

use App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'  => $this->faker->unique()->randomElement(['Math', 'Science', 'Computer', 'Art', 'History', 'English']),
            'description'  => $this->faker->unique()->randomElement(['pelajaran', 'teori', 'banyak pr', 'pelajaran menyenangkan', 'Penting', 'kurang penting']),
        ];
    }
}
