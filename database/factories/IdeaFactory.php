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
        $date = $this->faker->dateTimeBetween('-10 days', '-5 days', 'America/Montreal');
        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'title' => $this->faker->sentence(),
            'text' => $this->faker->paragraph(5),
            'created_at' => $date,
            'updated_at' => $date
        ];
    }
}
