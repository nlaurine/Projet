<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    
    public function studio(){
    
        return $this->belongsTo(Studios::class);
    }
    
    public function platforms(){
        
        return $this->belongsToMany(Platforms::class, "game_platform");
    }
    
    public function ratings(){
    
    return $this->hasMany(Ratings::class);
    }
    
}
