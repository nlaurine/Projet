@extends('layout')

@section('title', 'Accueil')

@section('content')

    <h1>Accueil du site</h1>
    
@foreach($latestGames as $latestGame)
    <article class="my-3">
        <header class="mb-3 border-bottom">
            <h2>{{ $latestGame->title }} développé par {{ $latestGame->studio->name }}</a></h2>
            <small>Sorti le {{ $latestGame->release_date }} et disponible au prix de {{ $latestGame->price }}€</small>
            <p><img src="{{ $latestGame->image }}" width='100px' height='100px'></img><p>
        </header>
        {!! nl2br(e(substr($latestGame->description, 0, 500))) !!}
        <a href="{{ route('games.show', ['id' => $latestGame->id] ) }}"><br>Fiche détaillée du jeu</a>
    </article>
@endforeach
    
@endsection