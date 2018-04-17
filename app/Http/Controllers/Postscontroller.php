<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;



class Postscontroller extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        // $post = $posts->first();

        return view('posts.index',[

            'posts' => $posts
        ]);
    }


    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request)
    {   
        // $file = request()->file('file');
        // $ext = $file->getClientOriginalExtension();
        // $file->move(storage_path('uploads'), 'image_'.time().'.'.$ext);
        //  return $request->file->store('images');
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
             'user_id' => $request->user_id,
             'photo' => $request->photo->store('imag'),
        ]);
        
       return redirect('/posts'); 
    }
    public function show($id)
    {
        return view('posts.show',[
            'post' => Post::findOrFail($id)
            
            ]);
    }
    public function edit($id)
    {
        $users = User::all();
        return view('posts.edit',[
            'users' => $users,
            'post' => Post::findOrFail($id)
            ]);
    }
    public function update(UpdatePostRequest $request,Post $post)
{ 
    $post->slug=null;
   $post->update($request->only(['title','description','user_id']));
     
//     Post::where('id', $id)->update(['title' => $request->title,
//     'description' => $request->description,
//      'user_id' => $request->user_id,
    
// ]);
    return redirect('/posts');
    
}
public function destroy($id)
{
    DB::table('posts')->where('id' , $id)->delete(); 
    return redirect('/posts');
}
    

}

