<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SportAve</title>

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
        <nav class="navbar navbar-expand-md navbar navbar-light" style="background-color: #AFCBFF; shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="brand-text font-weight-light">SportAve</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('boking.create') }}">Pesan Lapangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Transaksi</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(Auth::check() && Auth::user()->admin == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            
                        @elseif(Auth::check() && Auth::user()->admin != 1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a href="{{ url('/changepassword') }}" class="dropdown-item">
                                            Change Passwords
                                    </a>
                                    <a href="{{ url('edituser') }}" class="dropdown-item">
                                         Edit Profile
                                     </a>
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
                        @else
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <hr>
        <footer class="p-3 mb-2 text-dark" style="background-color: #D3D3D3; shadow-sm">
            @include('wfooter')
        </footer>

    </div>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/purecounter/purecounter.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
</body>
</html>
