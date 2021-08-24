<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        for($i = 1; $i<=10; $i++){
            
            $user = User::find($i);
            $game = Game::find($i);
            
            \App\Models\Ratings::factory(10)
            ->for($user)
            ->for($game)
            ->create();
            
        }
        
        
    }
}
