<?php

namespace Database\Factories;

use App\Models\Cards;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscriptions>
 */
class SubscriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'card_id' => Cards::factory(),
            'users_id' => User::factory(),
            'viewed_at' => $this->faker->dateTime
        ];
    }
}
