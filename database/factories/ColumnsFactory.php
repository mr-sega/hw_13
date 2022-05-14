<?php

namespace Database\Factories;

use App\Models\Boards;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Columns>
 */
class ColumnsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'boards_id' => Boards::factory(),
            'title' => $this->faker->title,
            'order' => $this->faker->numerify
        ];
    }
}
