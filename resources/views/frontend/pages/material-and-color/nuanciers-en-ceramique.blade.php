@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nuancier en céramique</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">nuancier en céramique</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Our Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">Tous</a></li>
                            @foreach($categories as $category)
                                <li><a href="#" data-filter=".el-{{ $category->id }}">{{ \Illuminate\Support\Str::title($category->name) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">

                        @foreach($nuanciers as $nuancier)

                            <div class="col-md-4 project-item-box el-{{ $nuancier->category->id }}">
                                <!-- Project Item Start -->
                                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="project-image">
                                        <div class="project-featured-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset($nuancier->document->path)}}" alt="{{ $nuancier->title }}">
                                            </figure>
                                        </div>

                                        <div class="project-btn">
                                            <a href="{{ route('nuancier_de_facade.show', ['nuancierFacadeSlug' => $nuancier->slug]) }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                        </div>
                                    </div>

                                    <div class="project-content">
                                        <h3>{{ \Illuminate\Support\Str::title($nuancier->title) }}</h3>
                                        <h2><a href="{{ route('nuancier_de_facade.show', ['nuancierFacadeSlug' => $nuancier->slug]) }}">{{ \Illuminate\Support\Str::limit(htmlspecialchars_decode(strip_tags($nuancier->content)), 44) }}</a></h2>
                                    </div>
                                </div>
                                <!-- Project Item End -->
                            </div>

                        @endforeach

                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->
@endsection
