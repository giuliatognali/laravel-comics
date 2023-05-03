<div class="card-comic">

    @foreach ($comics as $comic)
        <div class="my-card">
            <div class="img">
                <img src="{{ $comic['thumb'] }}">
            </div>

            <h6>{{ $comic['title'] }}</h6>
        </div>
    @endforeach

</div>
