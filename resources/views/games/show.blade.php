@extends('layout')

@section('title', 'Fiche du jeu')
@section('content')

    <article>
        <header class="mb-3 border-bottom">
            <h1>{{ $game->title }}</h1>
            <small>Sorti le {{ $game->release_date }} et développé par : {{ $game->studio->name }}</small>
            <img src="{{ $game->image }}" width='200px' height='200px'></img>
        </header>
        {!! nl2br(e($game->description)) !!}
    </article>

@endsection