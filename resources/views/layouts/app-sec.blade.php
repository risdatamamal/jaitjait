<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Essential Meta Tags -->
    <meta name="application-name" content="Website Jait Jait">
    <meta name="author" content="Web Development Team Jait Jait">
    <meta name="keywords" content="Jait Jait, Jait Jait">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <link rel="canonical" href="https://jaitjait.com/">


    <title>@yield('title')</title>

    {{-- STYLE --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>
    <!-- NAVBAR -->
    @include('includes.navbar-sec')

    <!-- PAGE CONTENT -->
    @yield('content')


    <!-- FOOTER SECTION -->
    @include('includes.footer')


    <!-- SCRIPTS -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</body>

</html>
