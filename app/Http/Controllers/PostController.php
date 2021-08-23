<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Game;
use App\Models\Studios;

class PostController extends Controller
{
        public function show(int $id)
    {
        $game = Game::with('studio')->where('id', $id)->firstOrFail();
        
        return view('games.show', [
            'game' => $game,
            'id' => $id
        ]);
    }
}