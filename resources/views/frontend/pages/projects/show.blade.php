@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Retraite urbaine</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('projects.page') }}">Projets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Retraite urbaine</li>
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
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-list wow fadeInUp">
                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Date du projet :</h3>
                                    <p>15 novembre 2024</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Durée du projet :</h3>
                                    <p>12 heures / semaine</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Catégorie :</h3>
                                    <p>Rénovation intérieure résidentielle</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Client / Entreprise :</h3>
                                    <p>Luxe Intérieurs</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Lieu du projet :</h3>
                                    <p>789 avenue Maple, Design City</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->
                        </div>
                        <!-- Project Detail List End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Project Single Image Start -->
                        <div class="project-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/project-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Project Single Image End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <!-- Project Information Start -->
                            <div class="project-info">
                                <h2 class="text-anime-style-2">Informations sur le projet</h2>
                                <p class="wow fadeInUp">Ce projet a permis de transformer complètement l’espace en un intérieur moderne, fonctionnel et élégant. Chaque détail a été conçu pour optimiser l’agencement et offrir un design personnalisé qui répond aux attentes du client.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Nous avons sélectionné des matériaux haut de gamme et des finitions raffinées pour créer une ambiance chaleureuse et sophistiquée. L’objectif était d’harmoniser confort et esthétique, tout en maximisant l’utilisation de l’espace.</p>
                            </div>
                            <!-- Project Information End -->

                            <!-- Project Design Information Start -->
                            <div class="project-design-info">
                                <h2 class="text-anime-style-2">Points forts du design</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Les éléments clés du design comprennent des solutions innovantes et sur mesure pour un intérieur à la fois pratique et élégant.</p>
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>Mobilier sur mesure optimisant chaque recoin.</li>
                                    <li>Éclairage étudié pour une ambiance raffinée.</li>
                                    <li>Choix minutieux des textures et matériaux.</li>
                                    <li>Palette de couleurs harmonieuse et intemporelle.</li>
                                    <li>Finitions haut de gamme pour une durabilité maximale.</li>
                                </ul>
                            </div>
                            <!-- Project Design Information End -->
                        </div>
                        <!-- Project Entry End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->

@endsection
