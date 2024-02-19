@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-white mb-4">
                <h3>Stai modificando un Comic</h3>
                <h6 class="fw-bold">(Aggiorna i dati e, quando sei pronto, clicca su Salva subito.)</h6>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-8 bg-white p-3 rounded-3">
                    <form action="{{ route('comics.update', $comic['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo" required value="{{ $comic->title }}">
                        </div>
                         <div class="mb-3">
                            <textarea name="description" class="form-control" id="description" rows="6" placeholder="Descrizione" required>{{ $comic->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Link immagine" value="{{ $comic->thumb }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="price" class="form-control" id="price" placeholder="Prezzo" required value="{{ $comic->price }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="series" class="form-control" id="series" placeholder="Serie" required value="{{ $comic->series }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Data di vendita" required value="{{ $comic->sale_date }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="type" class="form-control" id="type" placeholder="Tipo" required value="{{ $comic->type }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="artists" class="form-control" id="artists" placeholder="Artista/i" required value="{{ $comic->artists }}">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="writers" class="form-control" id="writers" placeholder="Scrittore/i" required value="{{ $comic->writers }}">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary px-5 fs-4">Salva subito</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- GO BACK BUTTON --}}
            <div class="col-12 text-center mt-5">
                <a href="/comics">
                    <button type="button" class="btn btn-danger">Torna ai Comics</button>
                </a>
            </div>
        </div>
    </div>
@endsection