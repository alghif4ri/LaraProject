@extends('layouts.app')

@section('title', 'LaraProject')
@section('content')
    <h1>LaraProject
        <a class="btn btn-success" href="{{ url('posts/create') }}">Create Post</a>
    </h1>
    <h2>Post</h2>
    @php($number = 1)
    <div class="blog">
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at
                            {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" class="button btn btn-primary">Selanjutnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="button btn btn-warning">Edit</a>
                </div>
            </div>
            @php($number++)
        @endforeach
    </div>
@endsection
