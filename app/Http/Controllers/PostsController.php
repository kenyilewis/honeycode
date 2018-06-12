<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
      $posts = Post::latest()->paginate(5);

      return view('posts.index', compact('posts'));
    }


    public function show(Post $post)
    {

      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');

    }
    public function store()
    {
      $this->validate(request(),[
        'title' => 'required|max:60',
        'body' => 'required|min:20'
      ]);

      Post::create(request()->all());
      return redirect('/post');
    }
}
