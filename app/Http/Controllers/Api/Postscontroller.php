<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;

use App\Post;
use App\User;
use App\Http\Resources\Postresource;
use Illuminate\Database\Eloquent\Model;

class Postscontroller extends Controller
{
    public function index()
    {
        $post = Post::with('user')->get();
        // return Postresource::collection($post);
        return $post;
    }
    public function store(StorePostRequest $request)
    {
   $post =Post::create($request->all());
   return (new Postresource ($post));
    }
}
