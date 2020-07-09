<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->authorize('update', $post);

        $data = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'url' => 'nullable|image'
        ]);

        if (!request()->has('url')) {
            $data['url'] = $post['url'];
        }

        Auth::user()->posts()->update($data);

        // $post->update($data);

        return redirect(route('post.index'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'url' => 'required'
        ]);

        // dd($post);

        if ($request->hasFile('url') && $request->file('url')->isValid()) {
            // dump('valid');
            // $path = $request->url->path();
            $path = $request->file('url')->store('posts', 'public');
            $image = Image::make(public_path("storage/{$path}"))->fit(600, 600);
            $image->save();
            $post['url'] = $path;
        }

        // $image = $request->file('url');

        Auth::user()->posts()->create($post);
        // Post::create($post);

        return redirect('/posts');
    }
}
