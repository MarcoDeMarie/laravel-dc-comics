@extends('layout.main')

@section('content')

<main>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="series">
            <h1>CURRENT COMICS</h1>
            <div class="wrapper">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $comics as $comic )

                        <tr>
                            <th>{{ $comic->id }}</th>
                            <td><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td><button><a href="{{ route('comics.destroy', $comic->id) }}">DELETE</a></button></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="container button"><button>LOAD MORE</button></div>

        </div>

    </div>
</main>
@endsection
