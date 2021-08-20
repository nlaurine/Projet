<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function categorie_game(){
        
        return $this->hasMany(Categorie_game::class);
    }
    
    public function studio(){
    
        return $this->belongsTo(Studios::class);
    }
    
    public function game_Plateform(){
    
        return $this->hasMany(Game_Plateform::class);
    }
}
