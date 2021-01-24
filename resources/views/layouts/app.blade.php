<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        @media (min-width: 993px) {
            body.has-fixed-sidenav {
                padding-left: 300px;
            }
        }
        .v-enter-active, .fade-leave-active { transition: opacity 2.5s }
        .v-enter, .v-leave-to{ opacity: 0 }
        .wrapper {
            min-height: calc(100% - 4rem);
        }
    </style>
</head>
<body 
    @auth class="has-fixed-sidenav" @endauth
>
    <div id="app">
        @guest
           @include('nav')
            <main class="py-4">
                @yield('content')
            </main>
        @endguest
        @auth
            <header-vue 
                user="{{ Auth::user()->name }}"
                route="{{ route('logout') }}"
                :form="form"
            ></header-vue>        
            <transition>       
                <router-view></router-view>
            </transition>
            <footer-vue
                :form="form"
                @change="changeForm"
            ></footer-vue>
        @endauth
    </div>
</body>
</html>
