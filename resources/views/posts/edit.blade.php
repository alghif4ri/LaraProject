@extends('layouts.app')

@section('title', 'Edit Post')
@section('content')
    <h1 class="text-center">Edit Post</h1>
    <form method="POST" action="{{ url("posts/$post->id") }}"" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    <form method="POST" action="{{ url("posts/$post->id") }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
