<?php

namespace Database\Seeders;

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
        $this->call([
            UsersTableSeeder::class,
            StudiosTableSeeder::class,
            GameTableSeeder::class,
            CategoriesTableSeeder::class,
            GamePlatformSeeder::class,
            PlatformsSeeder::class,
            RatingsSeeder::class,
        ]);
    }
}
