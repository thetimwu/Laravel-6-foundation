@extends('layouts.app')

@section('content')
<div class="col-8 offset-2">

    <form action="{{route('post.update', ['post'=>$post->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                placeholder="Enter email" value={{old('title') ?? $post->title}}>
        </div>
        @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <input type="text" class="form-control" id="body" name="body" value={{ old('body') ?? $post->body}}>
        </div>
        @error('body')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" name="url">
        </div>
        @error('image')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
@endsection