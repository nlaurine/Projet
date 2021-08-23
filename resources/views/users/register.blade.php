@extends('layout')

@section('title', 'Inscription')

@section('content')
    
    <h1>Inscription</h1>
    
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        @if($errors->any())
            <aside class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
        @endif
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="display_name">Pseudo</label>
            <input type="text" class="form-control" name="display_name" id="display_name">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password-confirmation">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">S'inscrire</button>
        </div>
    </form>

@endsection