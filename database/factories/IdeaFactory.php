<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'title' => $this->faker->sentence(),
            'text' => $this->faker->paragraph(5),
            'num_comments' => $this->faker->numberBetween(0, 11),
            'num_likes' => $this->faker->numberBetween(0, 11)
        ];
    }
}
