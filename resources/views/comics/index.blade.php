@extends('layouts.app')

@section('title')
    Lista Fumetti
@endsection
@section('main_content')
<h1>Lista Fumetti</h1>

<div class="comics-wrapper">
    
    @foreach ($comics as $comic)
    <div class="comic-card">
        <img src="{{$comic->src}}" alt="{{$comic->title}}">
        <h3>{{$comic->title}}</h3>
        {{-- Link per la scheda prodotto e per il form di modifica prodotto --}}
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli fumetto</a>
        </div>
        <div>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
        </div>
    </div>
    {{-- Inserisco il pulsante per eliminare il fumetto --}}
    <div>
        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare?');">
        </form>
    </div>
    @endforeach
    
</div>

@endsection