<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}

<!-- Styles -->
    <link href="{{ asset('front/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body class="rtl">
<div id="loader" class=" min-vh-100 bg-white position-fixed w-100">
    <div class="spinner"></div>
</div>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                ایران مهربان
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">تماس با ما</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav float-left">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

    <main>
        @yield('content')
    </main>


    {{--footer--}}<section id="footer" class="bg-dark p-5">
        <div class="container  text-white">
            <div class="row ">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 h3">ایران مهربان</div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-small">دبیرخانه پویش ایران مهربان - کاشمر</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 pt-5">


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">

                    </div>
                </div>
            </div>
            <div class="row copyright mt-2 border-top">
                <div class="col-12 small pt-3" style="color: #999;">

                </div>
                <div class="col-12 small " style="color: #999;">
                    طراحی و توسعه: <a href="http://hsy.ir" class="text-white" target="_blank">Hsy.ir</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Scripts -->
<script src="{{ asset('front/js/app.js') }}" defer></script>
</body>
</html>
