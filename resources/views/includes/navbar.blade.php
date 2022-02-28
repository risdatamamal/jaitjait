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
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Consultation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Our Partners</a>
                </li>

                {{-- Navbar Jika Belum Login/Register --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link nav-btn nav-btn-primary" href="">Order Now</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link nav-btn nav-btn-primary" href="">Login</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link nav-btn nav-btn-secondary" href="">Register</a>
                    </li> --}}
                @endguest

                {{-- Navbar Jika Sudah Login/Register --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-inline" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Budi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item disabled">Account</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Dashboard Student</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Change Password</a>
                            </li>

                            <li>
                                <form id="logout-form" action="" method="POST">
                                    @csrf
                                    <a href=""
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="dropdown-item">
                                        Logout
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
