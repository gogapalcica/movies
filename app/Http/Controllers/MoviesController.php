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
}
