<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraProject</title>
    <style>
        .blog{
            padding: 5px;
            border-bottom: 1px solid lightgray;
        }
        small {
            color: gray;
        }
    </style>
</head>
<body>
    <h1>LaraProject</h1>
    {{-- @foreach ($posts as $post)
    {{$post}} <br>
    @endforeach --}}
    <div>
        <h2>Post</h2>
        @php($number = 1)
        @foreach($posts as $post)
        <div class="blog">
            <h3>{{$post[0]}}<small>#{{$number}}</small></h3> 
            <p>{{$post[1]}}</p>
        </div>
        @php($number++)
        @endforeach
    </div>
</body>
</html>