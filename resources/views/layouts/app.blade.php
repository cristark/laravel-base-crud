<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Titolo pagine con Yield --}}
    <title>@yield('titolo')</title>
    {{-- Link foglio di stile personale --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Link file JS personale --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>