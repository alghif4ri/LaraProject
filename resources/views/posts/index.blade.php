<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraProject</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgray;
        }

        small {
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h1>LaraProject
            <a class="btn btn-success" href="{{ url('posts/create') }}">Create Post</a>
        </h1>
        <h2>Post</h2>
        @php($number = 1)
        <div class="blog">
            {{-- @foreach ($posts as $post)
                @php($post = explode(',', $post))
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post[1] }}</h5>
                        <p class="card-text">{{ $post[2] }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated at
                                {{ date('d M Y H:i', strtotime($post[3])) }}</small></p>
                        <a href="{{ url("posts/$post[0]") }}" class="button btn btn-primary">Selanjutnya</a>
                    </div>
                </div>
                @php($number++)
            @endforeach --}}

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
    </div>
</body>

</html>
