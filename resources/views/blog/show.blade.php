@extends('layouts.blog')

@section('title')
    {{ $post->title }}
@endsection

@section('header')
    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url({{ asset('storage/'.$post->image) }});" data-overlay="9">
        <div class="container text-center">

            <div class="row h-100">
                <div class="col-lg-8 mx-auto align-self-center">

                    <p class="opacity-70 text-uppercase small ls-1">
                        {{ $post->category->name }}
                    </p>
                    <h1 class="display-4 mt-7 mb-8">{{ $post->title }}</h1>
                    <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">
                            {{ $post->user->name }}
                        </a>
                    </p>
                    <p><img class="avatar avatar-sm" src="{{ Gravatar::src(asset($post->user->email)) }}" alt="gravatar"></p>

                </div>

                <div class="col-12 align-self-end text-center">
                    <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
                </div>

            </div>

        </div>
    </header><!-- /.header -->
@endsection

@section('content')
    <!-- Main Content -->
    <main class="main-content">
        <div class="section" id="section-content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        {!! $post->contenu !!}
                        <div class="social social-hover-bg-brand text-center float-right">
                            {!! Share::currentPage()->facebook() !!}
                            {!! Share::currentPage()->twitter() !!}
                            {!! Share::currentPage()->linkedin() !!}
                            {!! Share::currentPage()->whatsapp() !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="gap-xy-2 mt-6">
                            @foreach($post->tags as $tag)
                                <a class="badge badge-pill badge-secondary" href="{{ route('blog.tag', $tag->id) }}">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <div class="media-list">

                            @comments(['model' => $post])

                        </div>


                        <hr>

                    </div>
                </div>

            </div>
        </div>


    </main>
@endsection
@section('script')
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
