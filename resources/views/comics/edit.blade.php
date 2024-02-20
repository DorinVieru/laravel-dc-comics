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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('comics.update', $comic['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" id="title" placeholder="Titolo" required value="{{ old('title') ?? $comic->title }}">
                            @error ('title')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <textarea name="description" class="form-control @error ('description') is-invalid @enderror" id="description" rows="6" placeholder="Descrizione" required>{{ old('description') ?? $comic->description }}</textarea>
                            @error ('description')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="thumb" class="form-control @error ('thumb') is-invalid @enderror" id="thumb" placeholder="Link immagine" value="{{ old('thumb') ?? $comic->thumb }}">
                            @error ('thumb')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="price" class="form-control @error ('price') is-invalid @enderror" id="price" placeholder="Prezzo" required value="{{ old('price') ?? $comic->price }}">
                            @error ('price')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="series" class="form-control @error ('series') is-invalid @enderror" id="series" placeholder="Serie" required value="{{ old('series') ?? $comic->series }}">
                            @error ('series')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="sale_date" class="form-control @error ('sale_date') is-invalid @enderror" id="sale_date" placeholder="Data di vendita" required value="{{ old('sale_date') ?? $comic->sale_date }}">
                            @error ('sale_date')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="type" class="form-control @error ('type') is-invalid @enderror" id="type" placeholder="Tipo" required value="{{ old('type') ?? $comic->type }}">
                            @error ('type')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="artists" class="form-control @error ('artists') is-invalid @enderror" id="artists" placeholder="Artista/i" required value="{{ old('artists') ?? $comic->artists }}">
                            @error ('artists')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="writers" class="form-control @error ('writers') is-invalid @enderror" id="writers" placeholder="Scrittore/i" required value="{{ old('writers') ?? $comic->writers }}">
                            @error ('writers')
                                <div class="text-danger fw-semibold">{{ $message }}</div>
                            @enderror
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