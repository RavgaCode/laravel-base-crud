@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi un nuovo fumetto</h1>

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
        {{-- Create Form --}}
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value='{{old('title')}}'>
        </div>
        <br>
        <div>
            <label for="src">Url immagine</label>
            <input type="text" id="src" name="src" value='{{old('src')}}'>
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value='{{old('series')}}'>
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price" value='{{old('price')}}'>
        </div>
        <br>
        <div>
            <label for="sale_date">Data d'uscita</label>
            <input type="date" id="sale_date" name="sale_date" value='{{old('sale_date')}}'>
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" value='{{old('type')}}'>
        </div>
        <br>

        

        <input type="submit" value="Salva">
    </form>
@endsection