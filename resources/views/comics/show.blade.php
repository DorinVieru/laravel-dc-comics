@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
        @if ($comic['thumb'] == null)
            <img class="img-position" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="{{ $comic['title'] }}">
        @else
            <img class="img-position" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        @endif
    </div>

    {{-- SECTION BG-BLUE JUMBO --}}
    <div class="container-fluid py-4 bg-blu-icon"></div>

    {{-- SECTION INFO COMIC --}}
    <div class="container-fluid bg-white py-5">
        <div class="container section-comic-info">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="d-flex justify-content-between px-3 bg-success text-white">
                        <p>U.S. Price: {{ $comic['price'] }}</p>
                        <p>Type: {{ $comic['type'] }}</p>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                    <div class="d-flex">
                        {{-- EDIT BUTTON --}}
                        <a href="{{ route('comics.edit', ['comic' => $comic['id']]) }}">
                            <button type="button" class="mt-2 btn btn-warning">Edit Comic Now</button>
                        </a>
                        {{-- DELETE BUTTON --}}
                        <form action="{{  route('comics.destroy', ['comic' => $comic['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="sumbit" class="mt-2 ms-3 btn btn-danger">Delete Comic Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-3 text-end">
                    <p class="mb-1">Advertisement</p>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
                {{-- GO BACK BUTTON --}}
                <div class="col-12 text-center my-5">
                    <a href="/comics">
                        <button type="button" class="btn btn-primary">Go Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION TALENT & SPECS --}}
    <div class="container-fluid bg-light py-4">
        <div class="container section-talent-specs">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h3 class="pb-3">Talent</h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="td-talent">Art by:</td>
                            <td>
                                <p>{{ $comic['artists'] }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-talent">Written by:</td>
                            <td>
                                <p>{{ $comic['writers'] }}</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-5">
                    <h3 class="pb-3">Specs</h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="td-specs">Series:</td>
                            <td>
                                <span class="text-uppercase text-primary">{{ $comic['series'] }}</span>
                            </td>
                        </tr>
                            <tr>
                                <td class="td-specs">U.S. Price:</td>
                                <td>
                                    <span>{{ $comic['price'] }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-specs">On Sale Date:</td>
                                <td>
                                    <span>{{ $comic['sale_date'] }}</span>
                                </td>
                            </tr>
                    </table>
                </div>
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