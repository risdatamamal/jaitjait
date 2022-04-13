<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/r-2.2.9/datatables.min.css" />
    @stack('addon-style')

</head>

<body style="background-color: #fff">

    <div class="wrapper">
        <!-- Sidebar-->
        <div id="sidebar" style="background-color: #fff">
            <div class="sidebar-header sticky-top">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/assets/images/logo.png" alt="Jait Jait" />
                </a>
            </div>
            <div class="px-3 d-flex flex-column h-100" style="background-color: #fff">
                <a class="nav-link p-3" href="{{ route('dashboard.index') }}">Dashboard</a>
                <a class="nav-link p-3" href="">Shop</a>
                <a class="nav-link p-3" href="">Articles</a>
                <hr />
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="nav-link p-3" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </form>
            </div>
        </div>

        <!-- Page content wrapper-->
        <div id="content">
            <!-- NAVBAR -->
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow" style="background-color: #9B3668">
                <div class="container">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary" style="margin: 5px 0">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-inline active" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                    <?php $image_url = Auth::user()->image_url; ?>
                                    <img src="<?php if($image_url == null){echo '/assets/images/user.png';}
                                    ?>" style="width: {{Auth::user()->image_url == null ? '2.5rem' : '1.5rem' }}; border-radius: 20%" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item disabled">Account</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">Change
                                            Password</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

            <footer class="mt-3">
                <div class="footer-bottom py-2">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="footer-bottom__copyright text-primary">
                                &COPY; 2022 JaitJait. All rights reserved
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- SCRIPTS -->
    @stack('prepend-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous">
    </script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script src="/scripts/sidebar.js"></script>
    <script>
        function previewImage() {
            const poster = document.querySelector('#poster')
            const imagePreview = document.querySelector('#image-preview')
            const imageFile = new FileReader()
            imageFile.readAsDataURL(poster.files[0])
            imageFile.onload = (e) => (imagePreview.src = e.target.result)
        }
    </script>
    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/r-2.2.9/datatables.min.js"></script>
    @stack('addon-script')

</body>

</html>