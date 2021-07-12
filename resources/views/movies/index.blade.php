@extends('layout.app')

@section('title', 'Movies')


@section('content')


<div class="container">

    <section>
        <h1>Movies</h1>

        <div class="card_container">
            @foreach($movies as $movie)

            <div class="card">
                <h2>{{$movie->title}}</h2>

                <h3>Original title: {{$movie->original_title}}</h3>

                <h4>Date: {{$movie->date}}</h4>

                <h4>Vote: {{$movie->vote}}</h4>
            </div>

            @endforeach
        </div>
    </section>


</div>



@endsection