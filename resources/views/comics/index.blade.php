@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
        <button type="button" class="btn btn-primary button-series">CURRENT SERIES</button>
    </div>

    {{-- COMICS SECTION --}}
    <div class="container py-5">
        <div class="row align-items-center">
            @foreach ($comics as $comic)
                    <div class="col-2 card_container">
                        {{-- COMIC CARD --}}
                        <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}">
                            <div>
                                <div class="img-container p-relative">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
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