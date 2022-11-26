@extends('layouts.master')

@section('title',$movie->title);

@section('content')

    <div class="blog-post">
            <h2 class="blog-post-title">{{ $movie->title }}</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
            
            <p>{{ $movie->body }}</p>
    </div><!-- /.blog-post -->
        
@endsection