@extends('layouts.app')

@section('content')
<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
            placeholder="Enter email" value={{old('title')}}>
    </div>
    @error('title')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
        <label for="exampleInputPassword1">Body</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="body" placeholder="Body"
            value={{old('body')}}>
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
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection