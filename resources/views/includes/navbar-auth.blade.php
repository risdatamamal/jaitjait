<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/images/logo.png" alt="Jait Jait" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
