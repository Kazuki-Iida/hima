<?php

namespace App\Http\Controllers;

use app\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['posts' => $post]);
    }
    
    
}
