@extends('layout.main')

@section('content')

<main>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="series">
            <h1>CURRENT COMICS</h1>
            <div class="wrapper">

                <h3>{{ $comic->title }}</h3>
                <img src="{{ $comic->thumb }}" alt="">
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->price }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
