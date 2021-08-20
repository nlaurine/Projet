<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@laravel.dev',
                'password' => bcrypt('adminadmin'),
                'created_at' => now(),
                'is_admin' => true
            ]    
        ]);
        
        // Créer 50 utilisateurs fictifs
        \App\Models\User::factory(50)->create();
    }
}
