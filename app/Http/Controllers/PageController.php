<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class PageController extends Controller
{

    public function boot()
    {
        Paginator::useBootstrap();
    }


    public function  posts()
    {
        Paginator::useBootstrap();
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }
    
    
    public function  post(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
