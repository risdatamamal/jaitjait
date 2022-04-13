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
                    <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#consultation">Consultation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('articles') ? 'active' : '' }}" href="{{ route('articles') }}">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('our-partner') ? 'active' : '' }}" href="{{ route('our-partner') }}">Our Partners</a>
                </li>

                {{-- Navbar Jika Belum Login/Register --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link nav-btn nav-btn-primary" href="https://wa.me/6285155098853">Order Now</a>
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
                            {{ Auth::user()->name }}
                            <?php $image_url = Auth::user()->image_url; ?>
                            <img src="<?php if($image_url == null){echo '/assets/images/user.png';}
                            ?>" style="width: {{Auth::user()->image_url == null ? '2.5rem' : '1.5rem' }}; border-radius: 20%" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item disabled">Account</a>
                            </li>
                            @can ('isAdmin')
                                <li>
                                    <a class="dropdown-item" href="/admin/dashboard">Dashboard Admin</a>
                                </li>
                            @elsecan ('isTailor')
                                <li>
                                    <a class="dropdown-item" href="/tailor/dashboard">Dashboard Tailor</a>
                                </li>
                            @endcan
                            <li>
                                <a class="dropdown-item" href="">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Change Password</a>
                            </li>

                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
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
