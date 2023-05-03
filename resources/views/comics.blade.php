@extends('layouts.app')

@section('page.title')
DC Comics
@endsection

@section('page.main')
<section>
    <div class="container">
        <div class="label">
            <h4>CURRENT SERIES</h4>
        </div>
        <div class="container-small">
            @include('partials.comiccard')
        </div>
        <div class="container">
            <button class="btn-load">
                <h6>LOAD MORE</h6>
            </button>

        </div>
    </div>

</section>
    
@endsection