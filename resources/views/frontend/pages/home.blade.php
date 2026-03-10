@extends('frontend.layouts.base')

@section("heads")
    @parent
    <!-- Page Title -->
    <title>Cuisiniste à La Réunion – Cuisine Habitat</title>
@endsection

@section('main-content')

    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset('assets/images/hero-slider-1.jpg')}}" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp">Intérieurs inspirants</h3>
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Cuisine Habitat est votre cuisiniste à La Réunion avec 4 magasins</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Saint Denis, Saint André, Saint Louis et Le Tampon.</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('about.page') }}" class="btn-default">En savoir plus</a>
                                            {{--<a href="{{ route('projects.page') }}" class="btn-default btn-highlighted">Nos réalisations</a>--}}
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset('assets/images/hero-slider-2.jpg')}}" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h3 class="wow fadeInUp">Sublimez votre intérieur</h3>
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Transformez votre espace avec un dressing sur-mesure</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Des dressings sur-mesure qui combinent élégance, optimisation de l’espace et praticité. </p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Button Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('about.page') }}" class="btn-default">En savoir plus</a>
                                            {{--<a href="{{ route('projects.page') }}" class="btn-default btn-highlighted">Nos réalisations</a>--}}
                                        </div>
                                        <!-- Hero Button End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/about-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/about-img-2.jpg')}}" alt="">
                            </figure>

                            <!-- Feedback Counter Start -->
                            <div class="experience-counter">
                                <h3><span class="counter">10</span>+</h3>
                                <p>Années d'expérience</p>
                            </div>
                            <!-- Feedback Counter End -->
                        </div>
                        <!-- About Image 2 End -->

                        <!-- Feedback Counter Start -->
                        <div class="feedback-counter">
                            <p><span class="counter">95</span>%</p>
                            <h3>Avis positifs</h3>
                        </div>
                        <!-- Feedback Counter End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">À propos de nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Votre spécialiste de la cuisine sur mesure <span>à La Réunion.</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez <strong>CUISINE HABITAT</strong>, nous concevons des cuisines sur mesure adaptées à vos envies, votre espace et votre budget.
                                Notre objectif est simple : créer une cuisine fonctionnelle, élégante et durable qui correspond parfaitement à votre quotidien.
                                Que vous soyez à Saint-Denis, Saint-Louis, Saint-André et le Tampon, nos équipes vous accompagnent de la conception à l’installation.
                                Chaque projet est unique, chaque cuisine est personnalisée.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Content Body Start -->
                        <div class="about-us-content-body">
                            <!-- About Content Info Start -->
                            <div class="about-us-content-info">
                                <!-- About Us Content List Start -->
                                <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Créativité et expertise</li>
                                        <li>Approche client personnalisée</li>
                                    </ul>
                                </div>
                                <!-- About Us Content List End -->

                                <!-- About Us Content Button Start -->
                                <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="{{ route('about.page') }}" class="btn-default">En savoir plus</a>
                                </div>
                                <!-- About Us Content Button End -->
                            </div>
                            <!-- About Content Info End -->

                            <!-- About Content List Start -->
                            <div class="about-us-contact-list">
                                <!-- About Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Saint Denis</p>
                                        <h3>0693 02 72 07</h3>
                                    </div>
                                </div>
                                <!-- About Contact Item End -->

                                <!-- About Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Saint Louis</p>
                                        <h3>0262 57 26 38</h3>
                                    </div>
                                </div>
                                <!-- About Contact Item End -->

                                <!-- About Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Saint André</p>
                                        <h3>0693 94 75 28</h3>
                                    </div>
                                </div>
                                <!-- About Contact Item End -->

                                <!-- About Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Le Tampon</p>
                                        <h3>0692 11 38 48</h3>
                                    </div>
                                </div>
                                <!-- About Contact Item End -->
                            </div>
                            <!-- About Content Info End -->
                        </div>
                        <!-- About Us Content Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Pourquoi nous choisir</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez l’univers de <span>CUISINE HABITAT</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Créez la cuisine de vos rêves avec nos solutions sur-mesure : cuisine moderne, dressing optimisé ou agencement unique. Personnalisez votre espace pour un intérieur pratique et élégant.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-1.svg')}}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Expertise et Savoir-Faire</h3>
                                    <p>Forts de plusieurs années d'expérience, nos experts vous offrent des conseils avisés et des solutions adaptées à vos besoins spécifiques.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-2.svg')}}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Fabrication Européenne et Qualité Garantie</h3>
                                    <p>Nos produits sont fabriqués en Europe selon des standards stricts, garantissant ainsi une qualité exceptionnelle et une longue durabilité.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-why-choose-3.svg')}}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Accompagnement Personnalisé et Service Complet</h3>
                                    <p>Nous vous offrons un suivi sur mesure à chaque étape de votre projet, de la conception à l'installation, pour vous garantir une expérience sans faille.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Item List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Why Choose Images Images Start -->
                    <div class="why-choose-images">
                        <!-- Why Choose Box 1 Start -->
                        <div class="why-choose-img-box-1">
                            <!-- Why Choose img 1 Start -->
                            <div class="why-choose-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/why-choise-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 1 End -->

                            <!-- Why Choose img 2 Start -->
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/why-choise-2.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 2 End -->
                        </div>
                        <!-- Why Choose Box 1 End -->

                        <!-- Why Choose Box 2 Start -->
                        <div class="why-choose-img-box-2">
                            <!-- Why Choose img 3 Start -->
                            <div class="why-choose-img-3">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/why-choise-3.webp')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 3 End -->

                            <!-- Why Choose img 4 Start -->
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/images/why-choise-4.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 4 End -->
                        </div>
                        <!-- Why Choose Box 2 End -->
                    </div>
                    <!-- Why Choose Images Images End -->
                </div>
            </div>
        </div>
    </div>

    {{--<div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">nos services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Des Espaces Uniques, Conçus <span>Pour Vous</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Nous concevons des espaces sur-mesure, combinant esthétisme et praticité. Que ce soit pour une cuisine ou un dressing, chaque projet est pensé pour s’adapter parfaitement à vos besoins et à votre style de vie.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ route('service.show') }}" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/service-1.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ route('service.show') }}">Cuisine sur-mesure</a></h3>
                            <p>Créez la cuisine parfaite, qui combine esthétique, confort et fonctionnalité. Chaque projet est conçu selon vos goûts et l’agencement de votre espace, pour une cuisine qui vous ressemble vraiment.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ route('service.show') }}" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/service-2.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ route('service.show') }}">Dressing sur-mesure</a></h3>
                            <p>Transformez votre espace de rangement en un véritable lieu de vie. Nos dressings sont conçus pour maximiser l’espace et offrir une solution élégante et pratique, adaptée à vos habitudes.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                --}}{{--<div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ route('service.show') }}" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/service-3.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ route('service.show') }}">sélection de meubles et de décoration</a></h3>
                            <p>Nos experts vous aident à choisir le mobilier et la décoration parfaits pour compléter votre style.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>--}}{{--

                <div class="col-lg-12">
                    <!-- All Services Button Start -->
                    <div class="all-services-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ route('services.page') }}" class="btn-default">voir tous les services</a>
                    </div>
                    <!-- All Services Button End -->
                </div>
            </div>
        </div>
    </div>--}}

    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Notre méthode de travail</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Du concept à la réalisation, découvrez<span> notre processus</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Chez Cuisine Habitat, nous vous accompagnons tout au long de votre projet, de l’idée initiale à la concrétisation, en vous offrant des conseils sur-mesure et une expertise à chaque étape.
                        </p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- How We Work List Start -->
                    <div class="how-we-work-list">
                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-1.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>01. Première consultation</h3>
                                <p>Nous débutons par une rencontre personnalisée pour bien comprendre vos besoins, vos attentes et votre style, afin de concevoir un projet qui vous ressemble.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-2.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>02. Planification du design</h3>
                                <p>Ensemble, nous choisissons les matériaux, les agencements et élaborons des rendus 3D, pour que vous puissiez visualiser votre future cuisine ou dressing et ajuster les détails à vos envies.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-3.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>03. Exécution du projet</h3>
                                <p>Nous prenons en charge l’intégralité de la réalisation, de la gestion à la coordination des travaux, pour garantir que chaque détail corresponde parfaitement au design validé.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-4.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>04. Revue finale</h3>
                                <p>Une fois le projet terminé, nous effectuons une visite finale pour valider chaque aspect avec vous, en nous assurant que tout est conforme à vos attentes.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->
                    </div>
                    <!-- How We Work List End -->

                    {{--<!-- How Work Company Slider Start -->
                    <div class="how-work-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-1.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-2.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-3.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-4.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-5.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{ asset('assets/images/company-logo-1.svg')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- How Work Company Slider End -->--}}
                </div>
            </div>
        </div>
    </div>

    <div class="our-skill">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Skill Content Start -->
                    <div class="our-skill-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">nos compétences</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Des compétences qui façonnent votre <span>maison de rêve</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Avec notre savoir-faire, nous créons des espaces uniques et fonctionnels, en harmonie avec vos besoins. Nos solutions sur-mesure garantissent qualité et satisfaction tout au long de votre projet.</p>
                        </div>
                        <!-- Section Title End -->

                        <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>
                                    <strong>Conception sur-mesure</strong> : Des solutions personnalisées qui s’adaptent parfaitement à vos espaces et vos envies.
                                </li>
                                <li>
                                    <strong>Qualité et savoir-faire</strong> : Des matériaux de qualité et une expertise pour garantir durabilité et esthétisme.
                                </li>
                                <li>
                                    <strong>Service clé en main</strong>: Nous vous accompagnons à chaque étape, de la conception à l’installation.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Our Skill Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Skill Image Start -->
                    <div class="our-skill-image">
                        <div class="our-skill-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/our-skill-1.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="our-skill-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/our-skill-2.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="our-skill-img-3">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/our-skill-3.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Our Skill Image End -->
                </div>
            </div>
        </div>
    </div>

    <div class="our-testimonials">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Our Testimonial Image Start -->
                    <div class="our-testimonials-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/testimonial.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Our Testimonial Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Témoignages clients</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Faites confiance à des milliers de <span>clients satisfaits.</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Faites défiler">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="testimonial-content">
                                                    <p>
                                                        Ma cuisine est magnifique !
                                                        Merci pour l'accompagnement tout au long du projet.
                                                        Maxime est jeune homme fascinant et professionnel qui maîtrise son métier.
                                                        Tout d'abord un peu stressé par mon projet, Maxime a su me détendre et éclaircir mon chez-moi.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                {{--<div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-1.jpg')}}" alt="">
                                                    </figure>
                                                </div>--}}
                                                <div class="author-content">
                                                    <h3>Axel Lepan</h3>
                                                    <p>Cuisine Habitat Saint-Denis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    Accueil très chaleureux.
                                                    On a été super bien reçu et conseiller.
                                                    On a finalement commandé un cuisine chez eux livraison très rapide dans les temps.
                                                    On a une très belle cuisine de très bonne qualité on est très satisfait et on recommande vous pouvez faire confiance à cuisine habitat saint louis.
                                                </p>
                                            </div>
                                            <div class="testimonial-body">
                                                {{--<div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-1.jpg')}}" alt="">
                                                    </figure>
                                                </div>--}}
                                                <div class="author-content">
                                                    <h3>Melissa Beauté sauvage</h3>
                                                    <p>Cuisine Habitat Saint Louis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="testimonial-content">
                                                    <p>
                                                        Je recommande fortement le cuisine habitat du TAMPON.

                                                        Ils sont à l'écoute et ont su optimiser au mieux les espaces dont j'avais besoin.
                                                        Très disponible et professionnel.
                                                        Merci encore a vous...

                                                        Délais de livraison respectée, et suite a un petit souci rencontré lors de la pose, le sav a réagit de suite et le lendemain tout était réglé. A aucun moment on nous a lâché. Notre cuisine est fonctionnelle et surtout optimiser.

                                                        Je remercie une nouvelle fois tout l'équipe notamment le cuisiniste pour son temps passer a tout poser😅.

                                                        On n'hésitera pas à vous recommander
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                {{--<div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('assets/images/author-1.jpg')}}" alt="">
                                                    </figure>
                                                </div>--}}
                                                <div class="author-content">
                                                    <h3>Isabelle AVABY</h3>
                                                    <p>Cuisine Habitat Tampon</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->

                        <!-- Testimonial Rating Counter Start -->
                        <div class="testimonial-rating-counter">
                            <div class="rating-counter">
                                <h2><span class="counter">4.47</span></h2>
                            </div>
                            <div class="testimonial-rating-content">
                                <div class="testimonial-client-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>27 avis</p>
                            </div>
                        </div>
                        <!-- Testimonial Rating Counter End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Conseils & Actualités</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Votre guide pour des</span> cuisines et intérieurs inspirants à La Réunion</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Découvrez nos conseils, astuces et tendances pour aménager votre cuisine sur mesure La Réunion, créer des espaces fonctionnels et stylés, et optimiser chaque détail de votre intérieur avec l’expertise de votre cuisiniste La Réunion.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Découvrez notre blog pour des conseils, des idées et des inspirations sur l'aménagement de votre cuisine et dressing. Suivez nos astuces et tendances pour créer des espaces fonctionnels et élégants.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure>
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="image-anime" data-cursor-text="Voir">
                                        <img src="{{ asset($blog->document->path)}}" alt="{{ $blog->title }}">
                                    </a>
                                </figure>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- Post Item Body Start -->
                            <div class="post-item-body">
                                <!-- Post Item Content Start -->
                                <div class="post-item-content">
                                    <h3><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ \Illuminate\Support\Str::limit($blog->title, 30) }}</a></h3>
                                </div>
                                <!-- Post Item Content End -->

                                <!-- Blog Item Button Start -->
                                <div class="post-item-btn">
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="post-btn">lire la suite</a>
                                </div>
                                <!-- Blog Item Button End -->
                            </div>
                            <!-- Post Item Body End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                @endforeach

                <div class="col-lg-12">
                    <!-- Our Blog Footer Start -->
                    <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ route('blogs.page') }}" class="btn-default">Voir tous les blogs</a>
                    </div>
                    <!-- Our Blog Footer End -->
                </div>
            </div>
        </div>
    </div>

@endsection
