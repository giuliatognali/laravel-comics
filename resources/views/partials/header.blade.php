<header>
    <div class="container-top">
        <div class="container">
            <div class='top-header'>
                <h5> DC POWER VISA</h4>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ADDITIONAL DC SITES
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Site 1</a></li>
                            <li><a class="dropdown-item" href="#">Site 2</a></li>
                            <li><a class="dropdown-item" href="#">Site 3</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div>
            <img class='img-logo' src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class='d-flex justify-content-center gap-3 mb-0'>
                @foreach ($nav as $item)
                    <li>
                        <a href="">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="jumbo">    
    </div>

</header>
