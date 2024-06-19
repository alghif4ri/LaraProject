@extends('layouts.app')

@section('title', "$post->title")

@section('content')
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }} <a href="#">Author</a>
        </p>
        <p>{{ $post->content }}</p>
        <small class="text-muted">{{ $total_comments }}</small>
        @foreach ($comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p style="font-size:8pt ">{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach
    </article>
    <i class="bi bi-xbox"></i>
    <a href="{{ url('posts') }}">Kembali</a>
@endsection
