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

 <h2>Poster un avis :</h2>
 
     <h3>Notez :</h3>
    
     <form method="post" action="{{ route('games.ratings.store', ['id' => $game->id]) }}">
        @if($errors->any())
            <aside class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
        @endif
        
        @csrf
        <div class="form-group">
    <div>
      <strong>
        <input type="radio" id="star5" name="rating" value="0" />
        <label for="star0" title="text">0/5</label>
        <input type="radio" id="star4" name="rating" value="1" />
        <label for="star1" title="text">1/5</label>
        <input type="radio" id="star3" name="rating" value="2" />
        <label for="star2" title="text">2/5</label>
        <input type="radio" id="star2" name="rating" value="3" />
        <label for="star3" title="text">3/5</label>
        <input type="radio" id="star1" name="rating" value="4" />
        <label for="star4" title="text">4/5</label>
        <input type="radio" id="star1" name="rating" value="5" />
        <label for="star5" title="text">5/5</label>
      </strong>
    </div>
            <label for="pseudo">Pseudo</label>
            @if($errors->has('pseudo'))
                <input type="text" id="pseudo" name="pseudo" class="form-control @error('pseudo') is-invalid @enderror">
                <div class="invalid-feedback">
                    {{ $errors->first('pseudo') }}
                </div>
            @else
                <input type="text" id="pseudo" name="pseudo" class="form-control @if(old('pseudo')) is-valid @endif" value="{{ old('pseudo') }}">
            @endif
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
            @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
            @endif
        </div>
        <div class="mt-2">
            <button class="btn btn-primary">Envoyer</button>
        </div>
    </form>
    
    <section>
        <h2>Liste des avis</h2>
        
        @foreach($ratings as $rating)
            <article class="my-2 py-3 border-bottom">
                <header class="mb-2">
                    <small>Rédigé par {{ $rating->user->username }} le {{ $rating->created_at }}</small>
                </header>
                <mark>{{ $rating->mark }} /5</mark>
                {{ $rating->content }}
            </article>
        @endforeach
    </section>
    

@endsection