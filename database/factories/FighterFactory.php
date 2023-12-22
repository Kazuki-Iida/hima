<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fighter>
 */
class FighterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'height' => $this->faker->numberBetween(165, 190),
            'weight' => $this->faker->randomFloat(2, 52, 90),
            'win' => $this->faker->numberBetween(0, 30),
            'lose' => $this->faker->numberBetween(0, 30),
            'power' => $this->faker->numberBetween(1, 10),
            'speed' => $this->faker->numberBetween(1, 10),
            'technic' => $this->faker->numberBetween(1, 10),
            'intelli' => $this->faker->numberBetween(1, 10),
            'stamina' => $this->faker->numberBetween(1, 10),
            'mental' => $this->faker->numberBetween(1, 10),
        ];
    }
}
