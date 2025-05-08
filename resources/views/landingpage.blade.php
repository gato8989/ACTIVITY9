@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Our Site!</h1>
        <p class="lead">This is the public landing page for guests.</p>
        <hr class="my-4">
        <p>Please register or login to access the dashboard.</p>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary btn-lg mr-3" href="{{ route('login') }}">Login</a>
            <a class="btn btn-success btn-lg" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>
@endsection