<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <title>{{ config('MonBank banking', 'MonBank banking') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('MonBank', 'MonBank') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                               
                            @endif
                            
                            @if (Route::has('register'))
                               
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
          
            {{-- Sprowdzanie czy użytkownik jest zalogowanym --}}

            @if (isset(Auth::user()->isAdmin))

            {{-- Sprowdzanie czy użytkownik jest adminem --}}

                @if (Auth::user()->isAdmin == 0)

                {{-- Jeżeli nie jest, generujemy zwykłą stronę --}}

                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary" href = "/home"> Main </a>
                    
                    <a class="btn btn-primary" style="margin-left: 5px" href = "/history"> Transactions </a>
                </div>
                <br>

                    @yield('content')
                    
                @else
                
                {{-- Jeżeli jest, generujemy admin stronę --}}

                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-warning" href = "/admin/users">Users</a>
                    
                    <a class="btn btn-outline-warning" style="margin-left: 5px" href = "/admin/transactions">Transactions</a>
                </div>
                @yield('adminContent')
                @endif
            @else

            {{-- Jeżeli nie jest zalogowanym, generujemy zwykłą stronę --}}

            @yield('content')
            @endif
            
            
        </main>
    </div>
</body>
</html>
