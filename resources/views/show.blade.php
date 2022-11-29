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

    <div class="blog-post">
        <h2>Comments:</h2>

        <ul>
        @foreach ($movie->comments as $comment)

            <li>
                {{$comment->content}}
            </li>
            
        @endforeach
        </ul>
    </div>

    <div>
        <form method="POST" action = "/movies/{{$movie->id}}/comments">
            @csrf
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Leave a comment:</label>
            <textarea name= "content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        
            <button type="submit" class="btn btn-primary">Comment it</button>
        
        </form>
    </div>
        
@endsection