@extends('layout.main')

@section('content')

<main>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="series">
            <h1>CURRENT COMICS</h1>
            <div class="wrapper">

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <span><label for="title" class="form-label">Titolo</label></span>
                        <input type="text" class="form-control" id="title" name="title" placeholder="inserisci un titolo">
                    </div>

                    <div class="mb-3">
                        <span><label for="thumb" class="form-label">Immagine</label></span>
                        <input type="text" class="form-control" id="title" name="thumb" placeholder="inserisci url immagine">
                    </div>

                    <div class="mb-3">
                        <span><label for="description" class="form-label">Descrizione</label></span>
                        <input type="text" class="form-control" id="description" name="description" placeholder="inserisci una descrizione">
                    </div>

                    <div class="mb-3">
                        <span><label for="type" class="form-label">Genere</label></span>
                        <input type="text" class="form-control" id="type" name="type" placeholder="inserisci il genere di lettura">
                    </div>

                    <div class="mb-3">
                        <span><label for="price" class="form-label">Prezzo</label></span>
                        <input type="text" class="form-control" id="price" name="price" placeholder="inserisci il prezzo">
                    </div>

                    <button>SUBMIT</button>

                </form>

            </div>
        </div>
    </div>
</main>
@endsection
