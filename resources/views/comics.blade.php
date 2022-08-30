@extends('layouts.app')

<h1>Lista Fumetti</h1>

<div class="comics-wrapper">
    @foreach ($comics as $comic)
    <div class="comic-card">
        <img src="{{$comic->src}}" alt="{{$comic->title}}">
        <h3>{{$comic->title}}</h3>
    </div>
    @endforeach
    
</div>