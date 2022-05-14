<?php

namespace Database\Factories;

use App\Models\Users;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boards>
 */
class BoardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => Users::factory(),
            'title' => $this->faker->name()
        ];
    }
}
