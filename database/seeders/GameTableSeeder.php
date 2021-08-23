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
                'studio_id' => 2,
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
        
        DB::table('games')->insert([
            [
                'title' => 'Minecraft',
                'mark' => 1,
                'image' => "https://images-eu.ssl-images-amazon.com/images/I/418cEZfh8-L.jpg",
                'description' => 'Minecraft est un jeu vidéo de type aventure « bac à sable » (construction complètement libre) développé par le Suédois Markus Persson, alias Notch. Il s\'agit d\'un univers composé de voxels et généré aléatoirement, qui intègre un système d\'artisanat axé sur l\'exploitation puis la transformation de ressources naturelles (minéralogiques, fossiles, animales et végétales).',
                'studio_id' => 6,
                'price' => 100,
                'release_date' => '09/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'Grand Theft Auto V',
                'mark' => 5,
                'image' => "https://dyw7ncnq1en5l.cloudfront.net/optim/produits/0/14214/grand-theft-auto-v-ps3_1367404112__w1280.jpg",
                'description' => 'Grand Theft Auto V (plus communément abrégé GTA V) est un jeu vidéo d\'action-aventure. Le jeu fait partie de la série vidéoludique Grand Theft Auto.Cet épisode se déroule dans l\'État fictif de San Andreas en Californie du Sud. L\'histoire solo suit trois protagonistes: le braqueur de banque à la retraite Michael De Santa, le gangster Franklin Clinton et le trafiquant de drogue et d\'armes Trevor Philips, et leurs braquages sous la pression d\'une agence gouvernementale corrompue et de puissants criminels. Le jeu en monde ouvert permet aux joueurs de parcourir librement la campagne ouverte de San Andreas et la ville fictive de Los Santos, basée sur Los Angeles.',
                'studio_id' => 7,
                'price' => 100,
                'release_date' => '13/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'Mario Kart 8/Deluxe',
                'mark' => 10,
                'image' => "https://m.media-amazon.com/images/I/91+e17CoAML._AC_SY500_.jpg",
                'description' => 'Mario Kart 8 est un jeu vidéo de course. Huitième opus de la série Mario Kart, il est sorti en 2014 au Japon, en Europe, en Australie et en Amérique du Nord. Cet épisode met toujours en scène les principaux personnages de l\'univers de Mario et les oppose dans des courses de kart disputées à douze joueurs sur des circuits situés pour la plupart dans les différents lieux du monde de Mario. Il introduit une nouvelle mécanique de jeu, l\'antigravité, qui permet de rouler sur les murs et au plafond dans certaines portions des circuits tout en conservant les mécaniques traditionnelles de la série.',
                'studio_id' => 4,
                'price' => 100,
                'release_date' => '14/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'New Super Mario Bros',
                'mark' => 5,
                'image' => "https://m.media-amazon.com/images/I/91+e17CoAML._AC_SY500_.jpg",
                'description' => 'New Super Mario Bros. est un jeu vidéo de plates-formes. Le scénario du jeu est similaire à celui des autres jeux de plates-formes de la série Super Mario. Mario doit sauver la princesse Peach en combattant les sbires de Bowser. Il a pour cela accès à différents power-ups, comme le Méga Champi, la Fleur de Feu ou l\'étoile d\'invincibilité, chacun d\'entre eux lui donnant des capacités différentes. Après avoir parcouru les huit mondes, pour un total de 80 niveaux, Mario doit vaincre Bowser Jr. puis Bowser pour finalement sauver Peach.',
                'studio_id' => 4,
                'price' => 100,
                'release_date' => '06/01/01'
            ]    
        ]);
        
        DB::table('games')->insert([
            [
                'title' => 'FIFA 18',
                'mark' => 0.005,
                'image' => "https://s1.gaming-cdn.com/images/products/2064/271x377/fifa-18-cover.jpg",
                'description' => 'FIFA 18 est un jeu vidéo de football. C\'est nul.',
                'studio_id' => 8,
                'price' => 100,
                'release_date' => '17/01/01'
            ]    
        ]);
    }
}