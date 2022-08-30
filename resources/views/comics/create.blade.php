@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <br>
        <div>
            <label for="src">Url immagine</label>
            <input type="text" id="src" name="src">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price">
        </div>
        <br>
        <div>
            <label for="sale_date">Data d'uscita</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type">
        </div>
        <br>

        

        <input type="submit" value="Salva">
    </form>
@endsection