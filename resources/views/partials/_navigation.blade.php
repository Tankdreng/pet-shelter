<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand nav-bar-main-link lilita-one-font" href="/">HAPPY TAILS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link nav-bar-link lilita-one-font {{ strtolower(request()->getRequestUri()) == '/pets/dog' ? 'nav-link-selected' : '' }}"
                        href="/pets/dog">DOGS & KITTENS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link nav-bar-link lilita-one-font {{ strtolower(request()->getRequestUri()) == '/pets/cat' ? 'nav-link-selected' : '' }}"
                        href="/pets/cat">CATS & KITTENS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link nav-bar-link lilita-one-font {{ request()->is('pets') ? 'nav-link-selected' : '' }}"
                        href="/pets">OTHER PETS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link nav-bar-link lilita-one-font {{ request()->is('aboutUs') ? 'nav-link-selected' : '' }}"
                        href="/aboutUs">ABOUT US</a>
                </li>
            </ul>
            @auth
                <div class="login-button-div">
                    <ul class="navbar-nav">
                        <li style="margin-right: 10px;"> <!-- Inline CSS, should probably be fixed later -->
                            <a class="btn btn-primary nav-bar-link login-button lilita-one-font"
                                href="{{ url('profile') }}">
                                <p class="lilita-one-font mb-0">{{ auth()->user()->name }}</p>
                            </a>
                        </li>
                        <li style="margin-right: 10px;"> <!-- Inline CSS, should probably be fixed later -->
                            <button onclick="window.location.href='/create';"
                                class="btn btn-primary nav-bar-link login-button lilita-one-font">
                                <p class="lilita-one-font mb-0">My posts</p>
                            </button>
                        </li>
                        <li>
                            <form method="POST" action="logout" class="mb-0">
                                @csrf
                                <button type="submit" class="btn btn-primary nav-bar-link login-button lilita-one-font">
                                    <p class="lilita-one-font mb-0">Log out</p>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="login-button-div">
                    <ul class="navbar-nav">
                        <li>
                            <a class="btn btn-primary nav-bar-link login-button lilita-one-font" href="{{ url('login') }}">
                                <p class="lilita-one-font mb-0">Login</p>
                            </a>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>
