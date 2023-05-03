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
                <h3>TITOLO FUMETTO</h3>
                <div class="buy">
                    <h6>Price</h6>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis fuga odio obcaecati maxime dolorem
                    sint,
                    cum, aperiam ipsam soluta nihil perspiciatis expedita ex eligendi rem sapiente, laborum tempore non
                    sunt.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis fuga odio obcaecati maxime dolorem
                    sint,
                    cum, aperiam ipsam soluta nihil perspiciatis expedita ex eligendi rem sapiente, laborum tempore non
                    sunt.
                </p>

            </div>
            <div class="adv col-4">
                <h6>ADVERTISEMENT</h6>
                <a href="">
                    <img class="img" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="container-small info">
            <div class="container-info">
                Altre info

            </div>
        </div>

    </div>
@endsection
