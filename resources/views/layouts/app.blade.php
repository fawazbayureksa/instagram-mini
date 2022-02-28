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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    REXXA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                        @if (Route::has('login'))
                        
                        @endif
                        
                        @else
                        <ul class="navbar-nav ms-auto">
                            <form action="">
                                <input type="text" class="form-control" placeholder="Search ...">
                            </form>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="home" class="nav-link"><i class="bi bi-house fs-3"></i></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="post/create" class="nav-link"><i class="bi bi-plus-square fs-3"></i></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="upload" class="nav-link"><i class="bi bi-cursor fs-3"></i></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="upload" class="nav-link"><i class="bi bi-compass fs-3"></i></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="upload" class="nav-link"><i class="bi bi-heart fs-3"></i></i></a>
                            </li>
                        </ul>

                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto d-flex justify-content-center">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                               
                            @endif --}}
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <x-fotonav :user="$user" />
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="user/edit" class="dropdown-item">Edit Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main style="margin-top: 6em">
            @yield('content')
        </main>
    </div>
</body>
</html>
