@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nos projets</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">nos projets</li>
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
                            <li><a href="#" data-filter=".architecture">Architecture</a></li>
                            <li><a href="#" data-filter=".interior">Intérieur</a></li>
                            <li><a href="#" data-filter=".bedroom">Chambre</a></li>
                            <li><a href="#" data-filter=".furniture">Mobilier</a></li>
                            <li><a href="#" data-filter=".kitchen">Cuisine</a></li>
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-6 project-item-box architecture bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-1.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Espaces résidentiels</h3>
                                    <h2><a href="{{ route('project.show') }}">Retraite urbaine : design moderne et confort</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box interior kitchen">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-2.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Maisons de luxe</h3>
                                    <h2><a href="{{ route('project.show') }}">Loft luxueux : chic industriel pour vivre</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box furniture architecture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-3.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Espaces extérieurs</h3>
                                    <h2><a href="{{ route('project.show') }}">Ambiance côtière : sérénité au bord de la mer</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box kitchen bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-4.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Designs modernes</h3>
                                    <h2><a href="{{ route('project.show') }}">Havre minimaliste : espaces simples, épurés, accueillants</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box interior">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-5.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Charme rustique retrouvé</h3>
                                    <h2><a href="{{ route('project.show') }}">L'étreinte de la nature : Tranquillité intemporelle</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box furniture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/project-6.jpg')}}" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="{{ route('project.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>Harmonie inspirée de la nature</h3>
                                    <h2><a href="{{ route('project.show') }}">Accent audacieux : Design de vie affirmé</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->
@endsection
