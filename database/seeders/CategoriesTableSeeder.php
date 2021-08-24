<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'RPG'    
            ],
            [
                'name' => 'Aventure'
            ],
            [
                'name' => 'Action'    
            ],
            [
                'name' => 'Horreur'    
            ]
        ]);
        
        $game = Game::find(1);
        $game->categories()->attach([1, 2, 3]);
        
        $game = Game::find(2);
        $game->categories()->attach([2, 4]);
    }
}
