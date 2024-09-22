<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cost' => $this->faker->numberBetween(1000, 3000),
            'class_size' => $this->faker->numberBetween(10, 30),
            'class_type' => $this->faker->randomElement(['hamda', 'ahmed', 'sara']),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'image' => 'https://img.freepik.com/free-psd/sports-fitness-classes-vertical-poster-template_23-2149445558.jpg?ga=GA1.1.925401826.1726969004&semt=ais_hybrid',
        ];
    }
}
