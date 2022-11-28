<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies',compact('movies'));
    }

    public function show($id){
        $movie = Movie::find($id);

        return view('show', compact('movie'));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $this->validate(
            request(),
            [
                'title'=>'required',
                'genre'=>'required',
                'director',
                'age'=>'numeric|min:1900|max:'.date('Y'),
                'storyline'=>'required|max:1000'
            ]
        );
        Movie::create([
            'title'=>request('title'),
            'genre'=>request('genre'),
            'director'=>request('director'),
            'age'=>request('age'),
            'storyline'=>request('storyline'),
            'published'=>true,
        ]);

        return redirect('/movies');
    }
}
