<footer>
    <div class="container-footer-top">
        <div class="top-footer">
            <ul class="container">
                @foreach ($dc_links as $link)
                    <li>
                        <a href="{{ $link['link'] }}">
                            <div class="img-container">
                                <img src="{{ Vite::asset($link['img']) }}" alt="">
                            </div>
                            <h4>{{ $link['text'] }}</h4>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- footer main --}}
    <div class="main-footer">
        <div class="container">
            <div>
                <h3>DC COMICS</h3>
                <ul>
                    @foreach ($dc_comics as $comic)
                        <li>
                            <a href="{{ $comic['link'] }}" target="{{ $comic['target'] }}">
                                {{ $comic['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <h3>SHOP</h3>
                <ul>
                    @foreach ($dc_shops as $shop)
                        <li>
                            <a href="{{ $shop['link'] }}" target="{{ $shop['target'] }}">
                                {{ $shop['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>DC</h3>
                <ul>
                    @foreach ($dc_list as $item)
                        <li>
                            <a href="{{ $item['link'] }}" target="{{ $item['target'] }}">
                                {{ $item['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>SITES</h3>
                <ul>
                    @foreach ($dc_sites as $site)
                        <li>
                            <a href="{{ $site['link'] }}" target="{{ $site['target'] }}">
                                {{ $site['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-dc">
            </div>

        </div>
        <div class="container">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, assumenda blanditiis nihil deserunt
                rerum cumque optio illo doloribus reiciendis suscipit aspernatur, quidem laborum? Totam id error odit
                ipsa dignissimos consequuntur!</p>

        </div>
    </div>
    {{-- /footer main --}}
    {{-- footer bottom --}}
    <div class="bottom-footer py-4">
        <div class="container">
            <div>
                <button>
                    <a href="#">SIGN-UP NOW!</a>
                </button>
            </div>
            <div class="contacts">
                <h3>FOLLOW US</h3>
                <ul>
                    @foreach ($socials as $contact)
                        <li></li>
                        <li>
                            <a href="{{ $contact['link'] }}" target="{{ $contact['target'] }}">
                                <img src="{{ Vite::asset($contact['icon']) }}" alt="{{ $contact['name'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
