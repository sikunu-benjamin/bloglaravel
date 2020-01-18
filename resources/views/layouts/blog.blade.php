<!DOCTYPE html>
<html lang="en">
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

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img class="logo-dark" src="{{ asset('img/logo-dark.png') }}" alt="logo">
                <img class="logo-light" src="{{ asset('img/logo-light.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>
            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
                    <nav class="nav">
                        <a class="nav-link" href="../blog/classic.html">Classic</a>
                        <a class="nav-link" href="../blog/grid.html">Grid</a>
                        <a class="nav-link" href="../blog/list.html">List</a>
                        <a class="nav-link active" href="../blog/sidebar.html">Sidebar</a>
                        <div class="nav-divider"></div>
                        <a class="nav-link" href="../blog/post-1.html">Post 1</a>
                        <a class="nav-link" href="../blog/post-2.html">Post 2</a>
                    </nav>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About <span class="arrow"></span></a>
                </li>
            </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{ route('login') }}">Login</a>
        <a class="btn btn-xs btn-round btn-outline-success ml-1" href="{{ route('register') }}">Register</a>

    </div>
</nav><!-- /.navbar -->

@yield('header')
<!-- Main Content -->
@yield('content')


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="{{ route('welcome') }}"><img src="{{ asset('img/logo-dark.png') }}" alt="logo"></a>
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

</body>
</html>
