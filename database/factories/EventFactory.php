<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->sentence(3),
            'description' => fake()->text(),
            'start_time' => fake()->dateTimeBetween('2024-02-26', '2024-03-30'),
            'end_time' => fake()->dateTimeBetween('2024-02-31', '2024-04-30'),

        ];
    }
}
