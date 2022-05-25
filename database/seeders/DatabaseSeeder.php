<?php

namespace Database\Seeders;

use App\Models\Cards;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $boards = \App\Models\Boards::factory(15)->create();

        $users = \App\Models\User::factory(20)->create();

        $users->each(function (\App\Models\User $user) use ($boards) {
            $user->boards()->sync($boards->random(rand(3, 5)));

            $columns = \App\Models\Columns::factory(1)->create([
                'boards_id' => $boards->random()->id,
            ]);

            $cards = \App\Models\Cards::factory(1)->create([
                'column_id' => $columns->random()->id,
                'author_id' => $user->id,
                'executor_id' => $user->id,
            ]);

            \App\Models\Comments::factory(1)->create([
                'users_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $subscriptions = \App\Models\Subscriptions::factory(3)->create([
                'users_id' => $user->id,
                'card_id' => $cards->random()->id,
            ]);

            $notifications = \App\Models\Notifications::factory(2)->create([
                'card_id' => $cards->random()->id
            ]);

            $notifications->each(function (\App\Models\Notifications $notification) use ($subscriptions) {
                $notification->subscriptions()->sync($subscriptions->random(rand(1, 2)));
            });
        });
    }
}
