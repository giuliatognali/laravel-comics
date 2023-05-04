@extends('layouts.app')

@section('page.title')
    DC Comics
@endsection

@section('page.main')
    <div class="ms-container">
        <div class="strip">
            <div class="container-small">
                <div class="img">
                    Immagine fumetto
                </div>
            </div>

        </div>
        <div class="container-small row">
            <div class="card-info col-8">
                <h3>{{ $comics['title'] }}</h3>
                <div class="buy">
                    <h6>Price {{ $comics['price'] }}</h6>
                </div>

                <p> {{ $comics['description'] }}
                </p>

            </div>
            <div class="advs col-4">
                <h6>ADVERTISEMENT</h6>
                <a href="">
                    <img class="img" src="{{ Vite::asset('/resources/img/advisor.jpeg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="ms-container info">
            <div class="container-small row ">
                     {{-- Talent --}}
                <div class="col-6 ps-0 pe-4">
               
                    <h5>Talent</h5>
                    <div class="d-flex">
                        <div class="col-4">
                            <p>Art by:</p>
                        </div>
                        <p class="name-tag">
                            @foreach ($comics['artists'] as $artist)
                                {{ $artist }}
                            @endforeach
                        </p>
                    </div>
                    <div class="d-flex">
                        <div class="col-4">
                            <p>Written by:</p>
                        </div>
                        <p class="name-tag">
                            @foreach ($comics['writers'] as $writer)
                                {{ $writer }}
                            @endforeach
                        </p>
                    </div>
                </div>
                {{-- Specs --}}
                <div class="col-6 pe-0 ps-4">
                    <h5>Specs</h5>
                    <div class="d-flex">
                        <div class="col-4">
                            <p>Series:</p>
                        </div>
                        <p class="name-tag">{{$comics['series']}}</p>
                    </div>
                    <div class="d-flex">
                        <div class="col-4">
                            <p>U.S. Price:</p>
                        </div>
                        <p >{{$comics['price']}}</p>
                    </div>                    <div class="d-flex">
                        <div class="col-4">
                            <p>On Sale Date:</p>
                        </div>
                        <p>{{$comics['sale_date']}}</p>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
