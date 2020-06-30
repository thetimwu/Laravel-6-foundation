<?php

namespace App\Http\Controllers;

use App\Post;
use App\QueryFilter\Active;
use App\QueryFilter\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::query();

        $posts = Post::allPosts();

        // $posts = app(Pipeline::class)->send(Post::query())
        //     ->through([Active::class, Sort::class])
        //     ->thenReturn()
        //     ->get();

        // dd($pipeline->get());

        // if (request()->has('active')) {
        //     $posts->where('active', request('active'));
        // }

        // if (request()->has('sort')) {
        //     $posts->orderBy('title', request('sort'));
        // }

        // $posts = $posts->get();

        return view('post.index', compact('posts'));
    }
}
