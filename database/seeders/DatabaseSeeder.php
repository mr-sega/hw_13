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
        \App\Models\Cards::factory(10)->create();
        \App\Models\Boards::factory(10)->create();
        \App\Models\Comments::factory(10)->create();
        \App\Models\Notifications::factory(10)->create();
        \App\Models\Subscriptions::factory(10)->create();
        \App\Models\User::factory(10)->create();

    }
}
