@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>{{ $blog->title }}</title>
    <style>
        .page-header::before{
            background: linear-gradient(180deg, rgba(25, 35, 36, 0.3) 0%, rgba(25, 35, 36, 0.6) 80.94%);
        }
    </style>
@endsection

@section('main-content')

    <div class="page-header parallaxie" style="background-image: url({{ asset($blog->document->path)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blogs.page') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($blog->title, 30) }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{--<!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset($blog->document->path)}}" alt="{{ $blog->title }}">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->--}}

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">
                                {!! $blog->content !!}
                            </p>
                        </div>
                        <!-- Post Entry End -->

                        {{--<!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags :
                                            <a href="#">meubles</a>
                                            <a href="#">éclairage</a>
                                            <a href="#">rangement</a>
                                        </span>
                                    </div>
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->--}}
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>

@endsection
