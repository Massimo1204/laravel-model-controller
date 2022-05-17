@extends('layouts.base')

@section('main-content')
    <h1 class="main-title">Movies</h1>

    <div class="content-wrapper">
        @foreach ($movies as $movie)
            <div class="card">
                <h1 class="title">Title: {{ $movie->title }}</h1>
                <h2 class="title">Original Title: {{ $movie->original_title }}</h2>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Date: {{ $movie->date }} </p>
                <p>Vote: {{ $movie->vote }} </p>
            </div>
        @endforeach
    </div>
@endsection