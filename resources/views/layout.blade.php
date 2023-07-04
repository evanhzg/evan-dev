<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/coolvetica-2" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<main>
    <div id="app" class="snap-proximity snap-y h-screen overflow-scroll">
        @yield('content')
        <footer>
            @include('parts.footer')
        </footer>
    </div>
</main>

<footer>
</footer>
</body>
</html>
