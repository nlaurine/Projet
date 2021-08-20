<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studios')->insert([
            [
                'name' => 'Game Freak',
                'id' => 1,
                'logo' => "https://www.interactive.org/images/games_developers/2014-Game-Freak.jpg",
            ]    
        ]);
    }
}