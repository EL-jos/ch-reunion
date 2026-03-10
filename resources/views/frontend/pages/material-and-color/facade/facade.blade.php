@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $nuancier->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('nuancier_de_facades.page') }}">Nuancier de Façades</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $nuancier->title }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Project Single Image Start -->
                        <div class="project-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset($nuancier->document->path)}}" alt="{{ $nuancier->title }}">
                            </figure>
                        </div>
                        <!-- Project Single Image End -->

                        @if($nuancier->content)
                            <!-- Project Entry Start -->
                            <div class="project-entry">
                                <!-- Project Information Start -->
                                <div class="project-info">
                                    <h2 class="text-anime-style-2">Informations</h2>
                                    <p class="wow fadeInUp">
                                        {!! $nuancier->content !!}
                                    </p>
                                </div>
                                <!-- Project Information End -->
                            </div>
                            <!-- Project Entry End -->
                        @endif

                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->

@endsection
