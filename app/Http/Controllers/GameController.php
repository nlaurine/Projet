<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Game;
use App\Models\Studios;


class GameController extends Controller
{
    public function index()
    {   
        
        // $games = DB::table('games')
        //     ->select('games.*','studios.name')
        //     ->join('studios', 'games.studio_id', '=', 'studios.id')
        //     ->get();
            
        $games = Game::with('studio')->paginate(3); 
        
        return view('games.index',[
                'games' => $games]); 
        
    }
}
