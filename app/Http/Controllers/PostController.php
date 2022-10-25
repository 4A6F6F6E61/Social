<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // show all Posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(8),
        ]);
    }

    // Show one Post
    public function show(Post $post) {
        return view('posts.view', [
            'post' => $post,
        ]);
    }
}
