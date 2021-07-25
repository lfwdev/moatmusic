<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- LOADER *render blocking CSS* --}}
        @yield('loadercss')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('blockingJS')
        <title>@yield('title')</title>
        {{-- render non blocking css --}}
        @include('components.structure.nonblockingcss',['slot' =>
        [
            0 => ['href' => asset('assets/vendor/bootstrap/css/bootstrap.css')],
            1 => ['href' => asset('assets/vendor/fa5.13/css/all.min.css')],
            2 => ['href' => asset('assets/css/style.css')],
            // fonts
            3 => ['href' => "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"],
        ]])
        @yield('blockingCSS')
    </head>
    <body @yield('bodyAttr')>
        {{-- loader --}}
        @yield('loaderhtml')
        {{-- Content --}}
        @yield('body')
        {{-- Bootstrap javascript--}}
        <script src="{{ ('https://code.jquery.com/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ ('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}" defer></script>
        <script src="{{ ('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}" defer></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>
        @yield('nonBlockingJS')
    </body>
</html>