<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kelas'  => $this->faker->unique()->randomElement(['10 PPLG 1', '10 PPLG 2', '10 PPLG 3', '10 PPLG 4', '10 PPLG 5', '10 PPLG 6', '10 PPLG 7', '10 PPLG 9', '10 PPLG 10', '10 PPLG 11', '10 PPLG 12', '10 PPLG 13', '10 PPLG 14', '10 PPLG 15', '10 pplg 16', '10 pplg 17', '10 pplg 18', '10 pplg 19', '10 pplg 20', '10 pplg 21' , '10 pplg 22', '10 pplg 23', '10 pplg 24', '10 pplg 25' , '10 pplg 26', '10 pplg 27','10 pplg 28','10 pplg 29','10 pplg 30','10 pplg 31','10 pplg 32','10 pplg 33','10 pplg 34','10 pplg 35','10 pplg 36','10 pplg 37',]),
        ];
    }
}
