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
                'description' => 'Pokémon version jaune : édition spéciale Pikachu, couramment appelé Pokémon Jaune est un jeu vidéo de rôle japonais de la licence Pokémon développé par Game Freak sous la direction de Satoshi Tajiri.',
                'studio_id' => 1,
                'price' => 100,
                'release_date' => '98/09/12'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'Call of Duty',
                'mark' => 2,
                'image' => "https://www.hd-tecnologia.com/imagenes/articulos/2021/04/El-fin-de-Call-of-Duty-Warzone-sera-este-21-de-abril-segun-Activision.jpg",
                'description' => 'Call of Duty est un jeu vidéo de tir à la première personne se déroulant pendant la Seconde Guerre mondiale. Développé par le studio Infinity Ward et édité par Activision, il est commercialisé sur Windows et Mac OS X en 2003. Il est le premier jeu de la série Call of Duty.',
                'studio_id' => 1,
                'price' => 100,
                'release_date' => '03/10/29'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'Sonic',
                'mark' => 5,
                'image' => "https://jeuxvideo.rds.ca/wp-content/uploads/sites/2/2020/03/sonic-the-hedgehog.jpg",
                'description' => 'Sonic se bat contre le méchant Docteur Ivo Robotnik (Eggman) un vilain scientifique qui veut capturer les petits animaux pour ses expériences machiavéliques. Dans les jeux de Sonic gratuits vous pourrez parcourir des mondes immenses à toute vitesse et découvrir des personnages attachants comme son compagnon Tails ou le puissant Knuckles.',
                'studio_id' => 3,
                'price' => 100,
                'release_date' => '91/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'The Legend of Zelda',
                'mark' => 3,
                'image' => "https://cdn03.nintendo-europe.com/media/images/10_share_images/portals_3/SI_Hub_Zelda_Portal_image1600w.jpg",
                'description' => 'The Legend of Zelda, ou simplement Zelda, est une série de jeux vidéo d\'action-aventure.',
                'studio_id' => 4,
                'price' => 100,
                'release_date' => '86/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'Ready 2 Rumble Boxing',
                'mark' => 4.5,
                'image' => "https://image.jeuxvideo.com/images/ps/r/d/rd2rps0f.jpg",
                'description' => 'Ready 2 Rumble Boxing sur Dreamcast est un jeu de boxe où priment le fun et la bonne ambiance.',
                'studio_id' => 5,
                'price' => 100,
                'release_date' => '99/10/14'
            ]    
        ]);
    }
}