@extends('layouts.app')

@section('content')
<a href="/posts/create">Create</a>
<ul class="list-group">
    @foreach ($posts as $post)
    <li class="list-group-item">
        <a href="{{route('post.edit', ['post'=>$post->id])}}">
            <div>{{$post->title}}</div>
        </a>
        <div>{{$post->body}}</div>
        <div><img src="/storage/{{$post->url}}" alt="" class="rounded-circle img-responsive w-5"></div>
    </li>
    @endforeach

</ul>
@endsection