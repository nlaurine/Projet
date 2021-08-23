@extends('layout')

@section('title', 'Fiche du jeu')
@section('content')

    <article>
        <header class="mb-3 border-bottom">
            <h1>{{ $game->title }}</h1>
            <small>Sorti le {{ $game->release_date }} et développé par : {{ $game->studio->name }}</small>
            <p class=mx-3> <strong>Note: {{$game->mark}}/5</strong></p>
            <p><img src="{{ $game->image }}" width='200px' height='200px'></img></p>
        </header>
        {!! nl2br(e($game->description)) !!}
    </article>

@endsection