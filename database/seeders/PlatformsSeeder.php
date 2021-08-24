<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            [
                'name' => 'PlayStation',
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/PSX-Console-wController.png/2880px-PSX-Console-wController.png",
            ],

            [
                'name' => 'GameBoy Pocket',
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Game-Boy-Original.jpg/1024px-Game-Boy-Original.jpg",
            ],
            
            [
                'name' => 'PSP 3000',
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Psp-1000.jpg/500px-Psp-1000.jpg",
            ],
            
            [
                'name' => 'XBox 360',
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Xbox-360-Consoles-Infobox.png/460px-Xbox-360-Consoles-Infobox.png",
            ],
            
            [
                'name' => 'Nintendo SWITCH',
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg/520px-Nintendo-Switch-Console-Docked-wJoyConRB.jpg",
            ]    
        ]);
        
        $platform = Game::find(1);
        $platform->platforms()->attach([2]);
        
        $platform = Game::find(7);
        $platform->platforms()->attach([3, 5]);

    }
}
