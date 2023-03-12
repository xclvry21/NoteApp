<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, //1st user
            'title' => fake()->sentence(5),
            'body' => fake()->paragraph(4),
            'created_at' => date('Y-m-d H:i:s') //current date and time
        ];
    }
}
