<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">
        <div class="navbar-left mr-4">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img class="logo-dark" src="{{ asset('img/logo-dark.png') }}" alt="logo">
                <img class="logo-light" src="{{ asset('img/logo-light.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <nav class="nav nav-navbar nav-text-normal mr-auto">
                <a class="nav-link @if(request()->routeIs('history')) active disabled @endif" href="#">@lang('text-front.history')</a>
                <a class="nav-link @if(request()->routeIs('service')) active disabled @endif" href="#">Services</a>
                <a class="nav-link @if(request()->routeIs('extension')) active disabled @endif" href="#">Extensions</a>
                <a class="nav-link @if(request()->routeIs('blog')) active disabled @endif" href="{{ route('blog') }}">Blog</a>
                <a class="nav-link @if(request()->routeIs('about')) active disabled @endif" href="{{ route('about') }}">@lang('text-front.about')</a>
            </nav>

            <div class="d-flex align-items-center">
                @guest
                        <a class="btn btn-xs btn-success ml-lg-5 mr-2" href="{{ route('login') }}">{{ __('text-front.login-register.login') }}</a>
                    @if(Route::has('register'))
                        <a class="btn btn-xs btn-outline-secondary text-dark" href="{{ route('register') }}">{{ __('text-front.login-register.register') }}</a>
                    @endif
                @else
                        <a id="navbarDropdown" class="nav-link text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img width="30px" height="30px" style="border-radius: 50%" src="{{ asset(Gravatar::src(Auth::user()->email)) }}" alt="avatar"><span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                                My profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                @endguest

                <a class="ml-2 text-lighter" href="#" data-toggle="offcanvas" data-target="#offcanvas-search"><i class="ti-search"></i></a>
            </div>
        </section>
    </div>
</nav>
<!-- Navbar -->

@yield('header')
<!-- Main Content -->
@yield('content')


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="{{ route('blog') }}"><img src="{{ asset('img/logo-dark.png') }}" alt="logo"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
                    <a class="nav-link" href="../page/about-1.html">About</a>
                    <a class="nav-link" href="../blog/grid.html">Blog</a>
                    <a class="nav-link" href="../page/contact-1.html">Contact</a>
                </div>
            </div>

        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->
<script src="{{ asset('js/page.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('script')
</body>
</html>
