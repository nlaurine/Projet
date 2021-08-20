@extends('layout')

@section('title', 'Accueil')

@section('content')

    <h1>Accueil du site</h1>
    
@foreach($latestGames as $latestGame)
    <article class="my-3">
        <header class="mb-3 border-bottom">
            <h2>{{ $latestGame->title }}</a></h2>
            <small>Sorti le {{ $latestGame->release_date }}</small>
            <img src="{{ $latestGame->image }}" width='50px' height='50px'></img>
        </header>
        {!! nl2br(e(substr($latestGame->description, 0, 500))) !!}
    </article>
@endforeach
    
@endsection