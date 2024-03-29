@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
        <button type="button" class="btn btn-primary button-series">CURRENT SERIES</button>
    </div>

    {{-- COMICS SECTION --}}
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="fw-semibold">I Fumetti oggi disponibili</h1>
            </div>
            <div class="col-12 d-flex justify-content-center pt-3">
                <div class="col-7 bg-white d-flex justify-content-center align-items-center py-2 rounded-2">
                    <h5 class="pe-4 pt-1">Vuoi aggiungere un nuovo fumetto?</h5>
                    <a href="{{ route('comics.create') }}"><button class="btn btn-primary">Aggiungio nuovo fumetto</button></a>
                </div>
            </div>
            @foreach ($comics as $comic)
                    <div class="col-2 card_container">
                        {{-- COMIC CARD --}}
                        <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                            <div>
                                <div class="img-container p-relative">
                                    @if ($comic['thumb'] == null)
                                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="{{ $comic['title'] }}">
                                    @else
                                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                    @endif
                                    <span class="price-tag">{{ $comic['price'] }}</span>
                                </div>
                                <div>
                                    <h5>{{ $comic['series'] }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- LOAD MORE BUTTON --}}
                <div class="text-center mt-3 mb-4">
                    <button type="button" class="btn btn-primary">LOAD MORE</button>
                </div>
        </div>
    </div>

    {{-- SECTION BG-BLUE --}}
    <div class="container-fluid py-5 bg-blu-icon">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>DIGITAL COMICS</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>DC MERCHANDISE</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>SUBSCRIPTION</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>COMIC SHOP LOCATOR</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div> 
                    <div>
                        <h6>DC POWER VISA</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection