@extends('layouts.app')

@section('main_content')

<img src="{{$comic->src}}" alt="{{$comic->title}}">
<h3>{{$comic->title}}</h3>
<div>{{$comic->description}}</div>
<div>{{$comic->price}}</div>
<div>{{$comic->series}}</div>
<div>{{$comic->sale_date}}</div>
<div>{{$comic->type}}</div>

@endsection