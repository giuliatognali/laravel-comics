<div class="card-comic">

    @foreach ($comics as $comic)
        <div class="my-card">
            <div class="img">
                <a href="#"><img src="{{ $comic['thumb'] }}"></a>
                
            </div>

            <h6>{{ $comic['title'] }}</h6>
        </div>
    @endforeach

</div>
