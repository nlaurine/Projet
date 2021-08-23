<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $latestGames = Game::with('studio')->latest()->take(5)->get();

            
        $bestGames = Game::find(1);

        return view('homepage', [
            'latestGames' => $latestGames,
            'bestGames' => $bestGames
        ]);
    }
}
