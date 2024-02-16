<header>
    <div class="container">
        <div class="row my-2">
            <div class="col-2">
                <a href="/" class="brand">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
                </a>
            </div>
            <div class="col-10 d-flex align-items-center justify-content-end section-nav">
                <nav>
                    <ul class="list-unstyled d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="">CHARACTERS</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('comics') }}">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">MOVIES</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">GAMES</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">VIDEOS</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">NEWS</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="">SHOP</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>