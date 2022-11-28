@extends('layouts.master')

@section('title','Add New Movie')


@section('content')
    <form method="POST" action = "/movies">
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input name= "title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Movie name">
        <label for="exampleFormControlInput1" class="form-label">Genre</label>
        <input name= "genre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drama/Commedy/Horror....">
        <label for="exampleFormControlInput1" class="form-label">Director</label>
        <input name= "director" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Director name">
        <label for="exampleFormControlInput1" class="form-label">Year of production</label>
        <input name= "age" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Year">
        <label for="exampleFormControlTextarea1" class="form-label">Storyline</label>
        <textarea name= "storyline" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

        <button type="submit" class="btn btn-primary">Add Movie</button>

        </div>
    
    </form>   

      
@endsection