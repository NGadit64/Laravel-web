<?php

namespace Database\Factories;
use App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //untuk grade memakai faker randomElement(["11 pplg 2", "10 pplg 1", etc])
            'name' => $this->faker->name(), // nama lengkap
            'birthday' => $this->faker->date('Y-m-d', '2010-12-31'), // tanggal lahir sebelum 2010
            'classroom_id' => Classroom::factory(),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
        ];
    }
}
