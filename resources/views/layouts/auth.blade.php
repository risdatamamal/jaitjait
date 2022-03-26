<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    {{-- STYLE --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>
  <body>
    <!-- NAVBAR -->
    @include('includes.navbar-auth')

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- SCRIPTS -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>