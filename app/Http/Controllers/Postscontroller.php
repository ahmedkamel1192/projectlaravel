<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postscontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        dd($posts);
    }


    public function create()
    {

        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        
       return redirect('/posts'); 
    }

}

