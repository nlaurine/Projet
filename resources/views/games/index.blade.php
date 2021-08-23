@extends('layout')

@section('title', 'Liste des jeux vidéos')

@section('content')

    <h1>Liste des jeux vidéos</h1>
    
    @include('partials.games', ['games' => $games])

    {{ $games->links() }}

@endsection