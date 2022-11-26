@extends('layouts.master')

@section('title',$movie->title);

@section('content')

    <div class="blog-post">
            <h2 class="blog-post-title">{{ $movie->title }}</h2>
            
            <p>{{$movie->genre}}</p>

            <p>{{$movie->director}}</p>

            <p>{{$movie->age}}</p>

            <p>{{$movie->storyline}}</p>


    </div><!-- /.blog-post -->
        
@endsection