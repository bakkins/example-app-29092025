<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    // public function store(Request $request)
    // {
    //     return Post::create($request->all());
    // }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
    

    public function create()
    {
        return view('create');
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->noContent();
    }

    public function store(Request $request)
    {
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    Post::create($data);

    return redirect('/posts'); 
    }

}
