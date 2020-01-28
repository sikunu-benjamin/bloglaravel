<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    @yield('css')
</head>
<body>
    <div id="app">

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
                        <a class="nav-link @if(request()->routeIs('history')) active disabled @endif" href="#">History</a>
                        <a class="nav-link @if(request()->routeIs('service')) active disabled @endif" href="#">Services</a>
                        <a class="nav-link @if(request()->routeIs('extension')) active disabled @endif" href="#">Extensions</a>
                        <a class="nav-link @if(request()->routeIs('blog')) active disabled @endif" href="{{ route('blog') }}">Blog</a>
                        <a class="nav-link @if(request()->routeIs('about')) active disabled @endif" href="{{ route('about') }}">About us</a>
                    </nav>

                    <div class="d-flex align-items-center">
                        @guest
                            <a class="btn btn-xs btn-success ml-lg-5 mr-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if(Route::has('register'))
                                <a class="btn btn-xs btn-outline-secondary text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        <header class="header text-white p-0" style="background-color: #33323a;">
            <div class="container-wide">
                <div class="row no-gutters">

                    <div class="col-md-4 bg-img" style="background-image: url({{ asset('img/linda/linda2.jpg') }}); min-height: 300px;"></div>

                    <div class="col-md-8 p-6 p-md-8">
                        <h4>From The Founder</h4>
                        <p class="lead">Instrument cultivated alteration any favourable expression law far nor. Both new like tore but year. An from mean on with when sing pain.</p>
                        <p>Passage its ten led hearted removal cordial. Preference any astonished unreserved mrs. Prosperous understood middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from mr. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an.</p>
                        <p>Written enquire painful ye to offices forming it. Then so does over sent dull on. Likewise offended humoured mrs fat trifling answered. On ye position greatest so desirous. So wound stood guest weeks no terms up ought. By so these am so rapid blush songs begin.</p>
                    </div>

                </div>
            </div>
        </header>

        <main class="py-4">
            @auth
                <div class="container">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}<i class="fa fa-warning float-right"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-group mb-4">
                                @if(auth()->user()->isAdmin())
                                    <li class="list-group-item">
                                        <a href="{{ route('users.index') }}">
                                            Users
                                        </a>
                                    </li>
                                <li class="list-group-item">
                                    <a href="{{ route('posts.index') }}">Posts</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('categories.index') }}">Categories</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('tags.index') }}">Tags</a>
                                </li>
                            </ul>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="{{ route('trashed-posts.index') }}">Trahsed Posts</a>
                                    </li>
                                </ul>
                                @endif
                        </div>
                        <div class="col-md-8">
                            @yield('content')
                        </div>
                    </div>
                </div>
            @else
                @yield('content')
            @endauth
        </main>
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
        </footer>
    </div>
{{--    <script src="{{ asset('js/app.js') }}" ></script>--}}
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')
</body>
</html>
