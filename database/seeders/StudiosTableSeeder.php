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
        
        
        DB::table('studios')->insert([
            [
                'name' => 'Infinity Ward',
                'id' => 2,
                'logo' => "https://www.greenmangaming.com/newsroom/wp-content/uploads/2017/12/infinity-ward.jpg",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => 'Sega',
                'id' => 3,
                'logo' => "http://4.bp.blogspot.com/-OBew9Nw1gt4/VDBSXMpZjWI/AAAAAAAAFSc/giFT3MeQKd0/s1600/Logo%2BSega.png",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => 'Nintendo',
                'id' => 4,
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Nintendo.svg/langfr-330px-Nintendo.svg.png",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => '10tacle',
                'id' => 5,
                'logo' => "https://news-cdn.softpedia.com/images/news2/10TACLE-STUDIOS-Resolves-Extensive-Cooperation-With-9YOU-2.jpg",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => 'Mojang Studios',
                'id' => 6,
                'logo' => "https://img.generation-nt.com/mojang-logo_01667431.jpg",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => 'Rockstar Games',
                'id' => 7,
                'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Rockstar_Games_Logo.svg/langfr-280px-Rockstar_Games_Logo.svg.png",
            ]    
        ]);
        
        DB::table('studios')->insert([
            [
                'name' => 'Electronic Arts',
                'id' => 8,
                'logo' => "https://media.contentapi.ea.com/content/dam/eacom/fr-ca/common/october-ea-ring.png",
            ]    
        ]);
        
        
    }
}