<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body,
        html {
            height: 100%;
        }
        


        .bg {
            height: 100%;
            background-color: #f8f9fa;
        }

        .form-login {
            /* width: 100%; */
            /* max-width: 600px; */
            /* padding: 15px; */
            /* margin: auto; */
        }

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
    @include('layouts.app.header')
    <div class="container">

        @yield('content')

        @include('layouts.app.footer')
    </div>
</body>
</html>
