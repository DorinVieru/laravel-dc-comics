@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center text-white mb-4">
                <h3>Compila il form sotto per aggiungere un nuovo fumetto!</h3>
                <h6 class="fw-bold">(Tutti i campi sono obbligatori)</h6>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-8 bg-white p-3 rounded-3">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <input type="tetx" name="title" class="form-control" id="title" placeholder="Titolo" required>
                        </div>
                         <div class="mb-3">
                            <textarea name="description" class="form-control" id="description" rows="5" placeholder="Descrizione" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="thumb" class="form-control" id="thumb" placeholder="Link immagine">
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="price" class="form-control" id="price" placeholder="Prezzo" required>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="series" class="form-control" id="series" placeholder="Serie" required>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="sale_date" class="form-control" id="sale_date" placeholder="Data di vendita" required>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="type" class="form-control" id="type" placeholder="Tipo" required>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="artists" class="form-control" id="artists" placeholder="Artista/i" required>
                        </div>
                        <div class="mb-3">
                            <input type="tetx" name="writers" class="form-control" id="writers" placeholder="Scrittore/i" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary px-5 fs-4">Crea ora</button>
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