<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Index Function
    public function index() {
        $posts = Post::all();
        return view('posts.index', ['allPosts' => $posts]);
        //return "<h1>All posts</h1>";
    }

    // Show Function
    public function show($id) {
       // \Log::debug($id);
       $post = Post::find($id);
       return view('posts.show', ['post' => $post]);
    }

    // Create Function
    public function create() {
        $post = Post::all();
        return view('posts.create');
    }

    // Store Function
    public function store(Request $request) {
        // \Log::debug($request);
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        Post::create($data);
        return redirect('/posts');;
    }

    // Edit Function
    public function edit($id) {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    // Update Function
    public function update(Request $request, $id) {
        $post = Post::find($id);

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $post->update($data);

        return redirect('/posts');
    }
}
