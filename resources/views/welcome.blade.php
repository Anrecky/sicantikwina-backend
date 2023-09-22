@php
    // use Illuminate\Support\Facades\Route;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SICANTIKWINA</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">

    <style>
        .wave {
            background: url("{{ Vite::asset('resources/images/wave.svg') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            aspect-ratio: 960/170;
            width: 100vw;
        }
    </style>
</head>

<body class="antialiased">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/admin') }}" class="text-sm btn btn-primary underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm btn btn-secondary underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm btn btn-info underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="d-flex align-items-center justify-content-center flex-wrap"
        style=" min-height: 40vh;background-color: rgb(5 150 105);">


        <div class="2xl:mr-48 text-center lg:text-left">
            <h1 class="2xl:text-7xl text-4xl font-bold text-white">SICANTIKWINA</h1>
            <p class="2xl:text-lg text-sm mt-4 text-white"> Merupakan aplikasi berbasis daring (online) kepada
                masyarakat khususnya di Kabupaten Bangka <br /> agar dapat melaporkan secara online apabila terdapat
                perkawinan anak</p>
            <a href="" class="lg:mt-8 block lg:mx-0">
                <img src="{{ Vite::asset('resources/images/google-play-badge.png') }}" class="h-24 mx-auto lg:mx-0" />
            </a>
        </div>
        <img class="hidden lg:block" src="{{ Vite::asset('resources/images/undraw-mobile.svg') }}" />

    </div>
    <div class="wave"></div>
    <div>
        <h1 class="text-center">hello</h1>
    </div>
</body>

</html>
