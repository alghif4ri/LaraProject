@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <section style="height: 100%">

        <div class="row">
            <div class="col-md-4 "></div>


            <div class="card col-md-4 m-5 pb-5">
                <h1 class="text-center">Register</h1>
                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control id="name" name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control id="email" name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation">
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
