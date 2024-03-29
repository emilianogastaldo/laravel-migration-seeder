<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->randomElement(['Trenitalia', 'Italo', 'Eurocity']),
            'depature_station' => fake()->city(),
            'arrive_station' => fake()->city(),
            'departure_date' => fake()->date(),
            'departure_time' => fake()->time(),
            'arrive_date' => fake()->date(),
            'arrive_time' => fake()->time(),
            'train_code' => fake()->numerify(),
            'carriage_code' => rand(1, 13),
            'in_time' => rand(0, 1),
            'deleted' => rand(0, 1)
        ];
    }
}
