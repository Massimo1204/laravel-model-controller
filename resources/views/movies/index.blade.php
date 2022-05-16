@extends('layouts.base')

@section('main-content')
    <div class="content-wrapper">
        <h1>Movies</h1>
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