<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{


    protected $model = Student::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'class' => 'Class ' . $this->faker->numberBetween(1, 12),
            'email' => $this->faker->unique()->safeEmail,
            'grade' => $this->faker->randomFloat(2, 60, 100),
        ];
    }
}
