<footer>
    <div class="container-top">

    </div>
    <div class="main-footer">

    </div>
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
