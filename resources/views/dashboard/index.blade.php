@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        <a href="/" class="btn btn-primary d-flex align-items-center me-2"><span class="me-1"
                data-feather="home"></span>
            Home</a>
    </div>
@endsection
