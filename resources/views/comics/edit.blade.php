@extends('layouts.app')

@section('main_content')
    <h1>Modifica prodotto</h1>

    {{-- Message Error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        {{-- Edit Form --}}
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf

        {{-- Inserisco il metodo put, che deve essere messo a parte perchè i browser leggono solo get e put --}}

        @method('PUT')


        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value='{{old('title') ? old('title') : $comic->title}}'>
        </div>
        <br>
        <div>
            <label for="src">Url immagine</label>
            <input type="text" id="src" name="src" value='{{old('src') ? old('src') : $comic->src}}'>
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description') ? old('description') : $comic->description}}</textarea>
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value='{{old('series') ? old('series') : $comic->series}}'>
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price" value='{{old('price') ? old('price') : $comic->price}}'>
        </div>
        <br>
        <div>
            <label for="sale_date">Data d'uscita</label>
            <input type="date" id="sale_date" name="sale_date" value='{{old('sale_date') ? old('sale_date') : $comic->sale_date}}'>
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" value='{{old('type') ? old('type') : $comic->type}}'>
        </div>
        <br>

        

        <input type="submit" value="Salva">
    </form>
@endsection