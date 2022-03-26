!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    <link rel="shortcut icon" href="/assets/images/logo-el.png" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.1.1/b-html5-2.1.1/r-2.2.9/datatables.min.css" />
    @stack('addon-style')

</head>

<body style="background-color: #f1f1f1">

    <div class="wrapper">
        <!-- Sidebar-->
        <div id="sidebar" style="background-color: #eaeaea">
            <div class="sidebar-header bg-primary sticky-top" style="border-radius: 0 0 0 25px">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/assets/images/logo-el.png" alt="English Learner" />
                </a>
            </div>
            <div class="px-3 d-flex flex-column h-100" style="background-color: #eaeaea">
                <a class="nav-link p-3" href="{{ route('admin-dashboard') }}">Dashboard</a>
                <a class="nav-link p-3" href="{{ route('user.index') }}">Student</a>
                <a class="nav-link p-3" href="{{ route('course.index') }}">Class</a>
                <a class="nav-link p-3" href="{{ route('mentor.index') }}">Mentor</a>
                <a class="nav-link p-3" href="{{ route('quiz.index') }}">Quiz</a>
                <a class="nav-link p-3" href="{{ route('certificate.index') }}">Certificate</a>
                <a class="nav-link p-3" href="{{ route('event.index') }}">Event</a>
                <hr />
                <a class="nav-link p-3" href="#">Help</a>
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
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow"
                style="padding: 12px 1.25rem; border-radius: 0 0 25px 0">
                <div class="container">
                    <button type="button" id="sidebarCollapse" class="btn btn-secondary" style="margin: 5px 0">
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
                                    {{ Auth::user()->name }} <img src="/storage/{{ Auth::user()->avatar }}"
                                        style="width: 2.2rem; border-radius: 20%" alt="" />
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item disabled">Account</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/user-profile">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('change-password') }}">Change
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
                                &COPY; 2021 English Learner. All rights reserved
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