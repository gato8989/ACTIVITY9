@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome, {{ Auth::user()->name }}!</h3>
                    <p>This is your secure dashboard view.</p>
                    <p>Only authenticated users can see this content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection