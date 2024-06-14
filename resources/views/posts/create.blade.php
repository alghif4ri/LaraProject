
@extends('layouts.app')
@section('title','Create Post')

@section('content')
    <div class="container">
        <h1 class="text-center">Create Post</h1>
        <form method="POST" action="{{ url('posts') }}" class="form-control">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
@endsection