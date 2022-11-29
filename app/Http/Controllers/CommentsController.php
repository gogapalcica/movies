<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($id)
    {
        Movie::find($id)->addComment(request('content'));
        // Comment::create([
        //     'movie_id'=> $id,
        //     'content'=> request('content')
        // ]);

        return redirect()->back();
    }
}
