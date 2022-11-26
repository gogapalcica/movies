@extends('layouts.master')

@section('title','Movies')


@section('content')
    <h1>Movies</h1>

        <ul>
            @foreach($movies as $movie)
                <li><a href= "{{route('OnlyMovie',['id'=> $movie->id])}}">{{$movie->title}}</a></li>
                <p>{{$movie->storyline}}</p>
            @endforeach
        </ul>
@endsection