<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <!-- Sezione per il logo che rimanda alla home -->
            <div class="text-center mt-2">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" class="rounded" style="width: 100px" alt="logo">
                </a>
                <h1 class="h-f_color">Tavernelle Noleggi</h1>
            </div>

            <!-- Sezione della navbar che cambia in base al ruolo dell'utente -->
            <nav>
                @auth
                    @include('layouts/_nav'.auth()->user()->ruolo)
                @endauth
                @guest
                    @include('layouts/_navpublic')
                @endguest
            </nav>
        </header>

        <!-- Contenuto della pagina -->
        @yield('content')

        <!-- Footer della pagina -->
        <footer>
            @include('layouts/footer')
        </footer>
    </body>
</html>
