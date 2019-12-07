@extends('layouts/main')

@section('nav')
    {{-- Do not display navbar --}}
@endsection

@section('content')
    <div class="container">
        <h1>Page not found.</h1>

        <a href="{{ route('index') }}">Homepage</a>
    </div>
@endsection
