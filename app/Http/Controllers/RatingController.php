<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Ratings;
use App\Models\User;

class RatingController extends Controller
{
    public function store(Request $request, int $id)
    {
        // Validation du formulaire
        $request->validate([
            'pseudo' => 'required|min:4',
            'content' => 'required|min:5'
        ]);
        
        // On récupère l'article ou on envoie une page 404 si on ne le trouve pas
        $game = Game::findOrFail($id);
        
        // Insertion du commentaire pour l'article récupéré au-dessus
        $rating = new Ratings();
        $rating->content = $request->input('content');
        $rating->mark = $request->input('rating');
        $rating->user_id = mt_rand(1, 10);
        $game->ratings()->save($rating);
        
        return redirect()->route('games.show', ['id' => $id]);
    }
}
