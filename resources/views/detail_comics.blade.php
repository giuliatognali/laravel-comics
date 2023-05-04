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
                <h3>{{$comics['title']}}</h3>
                <div class="buy">
                    <h6>Price {{$comics['price']}}</h6>
                </div>

                <p> {{$comics['description']}}
                </p>

            </div>
            <div class="advs col-4">
                <h6>ADVERTISEMENT</h6>
                <a href="">
                    <img class="img" src="{{Vite::asset('/resources/img/advisor.jpeg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="ms-container info">
            <div class="container-small row">
                <div class="col-6">
                    <h5>Talent</h5>
                </div>
                <div class="col-6">
                    <h5>Specs</h5>
                </div>

            </div>
        </div>

    </div>
@endsection
