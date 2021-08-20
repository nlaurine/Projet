<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'Pokemon',
                'mark' => 4,
                'image' => "https://www.pokepedia.fr/images/b/b6/Pok%C3%A9mon_Jaune_Recto.png",
                'description' => 'Super jeu',
                'studio_id' => 1,
                'price' => 100,
                'release_date' => '10/10/10'
            ]    
        ]);
    }
}