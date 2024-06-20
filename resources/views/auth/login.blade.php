@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <section style="height: 100%">

        <div class="row">
            <div class="col-md-4 "></div>


            <div class="card col-md-4 m-5 pb-5">
                <h1 class="text-center">Login</h1>
                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
