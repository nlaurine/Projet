@foreach($games as $game)
        <article class="my-5">
            <header class="mb-3 border-bottom">
                <div class="d-flex align-items-center align-content-center ">
                    <img src="{{$game->image}}" width="100px" height="100px" class=mx-3></img>
                    <h2><a href="{{ route('games.show', ['id' => $game->id] ) }}">{{ $game->title }} </a> </h2>
                </div>
                <p class=mx-3> <strong>Note: {{$game->mark}}/5</strong></p>
                <small>Crée par les studios {{ $game->studio->name }} le {{ Carbon::parse($game->release_date)->format('d/m/Y') }}</small>
            </header>
            <!-- Le nl est le caractère de saut de ligne on le remplace par un "br" -->
            <!-- !! et "e" pour garder le htmlspecialchars -->
            <!-- substr... pour afficher les 200 premiers caractères de l'article -->
            {!! nl2br(e(substr($game->description, 0, 200))) !!}[...](<a href="{{ route('games.show', ['id' => $game->id] ) }}">Voir la suite</a>)
        </article>
@endforeach