<?php

namespace Database\Factories;

use App\Models\Columns;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cards>
 */
class CardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'column_id' => Columns::factory(),
            'author_id' => User::factory(),
            'executor_id' => User::factory(),
            'title' => $this->faker->title,
            'description' => $this->faker->text
        ];
    }
}
