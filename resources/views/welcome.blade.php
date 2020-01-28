@extends('layouts.blog')

@section('title')
    Dieu a parle || Your are welcome
@endsection

@section('header')
    <header class="header text-white h-fullscreen overflow-hidden" style="background-image: linear-gradient(-45deg, #667eea 0%, #764ba2 100%);">
        <canvas class="constellation" data-radius="0"></canvas>
        <div class="container position-static">
            <div class="row align-items-center h-100">

                <div class="col-lg-7">
                    <h1 class="display-4 fw-500">Let be
                        <span class="fw-400 pl-2" data-typing="Blessing, God Change you, God Transform you, God Speak for you, Save" data-type-speed="80">
                        </span>
                    </h1>
                    <p class="lead mt-5 mb-7 mb-md-9 w-80">
                        <strong>@lang('text-front.god')</strong>
                        {{ __('text-front.slogan') }}
                    </p>
                <div class="col-lg-5 d-none d-lg-block">
                </div>

            </div>

            <div class="d-none d-lg-block sample-blocks">
                <a href="block/cover.html#block-2" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-1.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
                </a>

                <a href="block/team.html#block-6" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-2.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                </a>

                <a href="block/cover.html#block-5" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-3.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                </a>

                <a href="block/blog.html#block-1" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-4.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
                </a>

                <a href="block/feature.html#block-8" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-5.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="800" data-aos-offset="0">
                </a>

                <a href="block/feature.html#block-13" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-6.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
                </a>

                <a href="block/shop.html#block-4" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-7.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="1200" data-aos-offset="0">
                </a>

                <a href="block/feature-text.html#block-3" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-8.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="1400" data-aos-offset="0">
                </a>

                <a href="block/pricing.html#block-6" target="_blank">
                    <img class="shadow-6" src="{{ asset('img/previews/flyer-9.jpg') }}" alt="..." data-aos="fade-up" data-aos-delay="1700" data-aos-offset="0">
                </a>
            </div>

        </div>
    </header>
@endsection

@section('content')
    <section class="section bg-gray overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto text-center mt-8 mt-md-0">
                    <img src="{{ asset('img/linda/linda.png') }}" style="width: 250px; height: 500px" alt="mama-linda" data-aos="fade-up">
                </div>

                <div class="col-md-6 align-self-center text-center text-md-left">
                    <h2>@lang('text-front.slogan_linda')</h2><br>
                    <p>@lang('text-front.text-linda')</p>
                    <br>
                    <a class="btn btn-lg btn-round btn-primary shadow-3" href="{{ route('blog') }}">@lang('text-front.get-started')</a>
                </div>

            </div>
        </div>
    </section>



    <!-- Offcanvas - Search -->
    <div id="offcanvas-search" class="offcanvas text-white" data-animation="fade" style="background-color: rgba(110,205,255,0.9)">
        <button type="button" class="close" data-dismiss="offcanvas" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="row align-items-center text-center h-90">
            <div class="col-10 col-md-6 mx-auto">
                <form class="input-transparent">
                    <input class="form-control form-control-lg border-0 lead-5" type="text" name="search" placeholder="Enter your keywords here">
                </form>
            </div>
        </div>
    </div>
@endsection
