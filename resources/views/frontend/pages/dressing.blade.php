@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Dressing</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dressing</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">

                        <div class="service-entry">
                            <!-- Section Title Start -->
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Dressing & Placard <span>Sur Mesure</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Offrez à votre intérieur une touche d’élégance avec nos dressing sur mesure à La Réunion. Que ce soit pour une chambre, un bureau ou une entrée, transformez chaque espace en un véritable havre d'organisation et de style.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chaque création est pensée pour vous, alliant fonctionnalité et personnalité. Grâce à nos solutions sur mesure, nous optimisons chaque recoin, même dans les espaces les plus réduits.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Optez pour la qualité, la durabilité et un design unique. Cuisine Habitat crée des espaces de rangement qui durent et qui vous ressemblent, transformant chaque projet en une expérience personnalisée.
                            </p>
                        </div>
                        <!-- Service Feature Image Start -->
                        <div class="service-feature-image">
                            <figure style=" max-width: 1080px; margin: 0 auto" class="image-anime reveal">
                                <img style="width: 100%; aspect-ratio: auto;" src="{{ asset('assets/images/dressing.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Feature Image End -->


                        <div class="service-entry">
                            <!-- Section Title Start -->
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Optez pour une <span>Solution Sur Mesure</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Fabriqué en France, notre dressing sur mesure est la solution idéale pour aménager un angle ou optimiser l’espace. Avec des modules équipés d’étagères et d’accessoires, il permet un rangement efficace tout en ajoutant une touche esthétique.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Ajoutez des patères ou un miroir pour compléter votre dressing sans encombrer l’espace au sol. Le module d'angle offre aussi un rangement optimisé, avec une penderie sur deux niveaux.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Choisir un dressing sur mesure made in France, c’est garantir une qualité irréprochable et une traçabilité des matériaux. Offrez à votre chambre un aménagement élégant, pratique et durable.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos équipes sont là pour vous accompagner et créer un meuble qui s’adapte parfaitement à vos besoins et à votre espace.
                            </p>
                        </div>

                        <div class="service-entry">
                            <!-- Section Title Start -->
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Les Avantages du <span>Sur Mesure</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, créez votre dressing sur-mesure à La Réunion, précis et facile en quelques clics.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pourquoi opter pour du sur-mesure plutôt que des solutions standard ?
                            </p>
                            <!-- Service Entry List Start -->
                            <div class="service-entry-list wow fadeInUp" data-wow-delay="0.6s">
                                <ul>
                                    <li>Optimisation de l’espace</li>
                                    <li>Un choix infini</li>
                                    <li>Installation simplifiée</li>
                                    <li>Un prix compétitif</li>
                                    <li>Qualité garantie</li>
                                    <li>Fabrication française</li>
                                    <li>Service client à l’écoute</li>
                                </ul>
                            </div>
                            <!-- Service Entry List End -->
                        </div>
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
@endsection
