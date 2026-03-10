@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">À propos de nous</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("home.page") }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">À propos de nous</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Us Section Start -->
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
    <!-- About Us Section End -->


    <!-- Vision Mission Start -->
    <div class="vision-mission">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">vision & mission</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez <span>notre entreprise</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Notre portfolio présente une variété de réalisations, allant d’intérieurs résidentiels élégants à des espaces professionnels fonctionnels.
                            En tant que cuisiniste La Réunion, nous mettons en avant notre savoir-faire dans la conception de cuisine sur mesure La Réunion,
                            de cuisine équipée Réunion et de cuisine personnalisée Réunion, avec des projets réalisés notamment à Saint-Denis, Saint-André, Saint-Louis et Le Tampon.
                        </p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Vision Mission Box Start -->
                    <div class="vision-mission-box">
                        <!-- Vision Mission Item Start -->
                        <div class="vision-mission-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-our-vision.svg')}}" alt="">
                            </div>
                            <div class="vision-mission-content">
                                <h3>notre vision</h3>
                                <p>Notre vision est de créer des espaces qui améliorent le quotidien grâce à un design fonctionnel et esthétique. En tant que cuisiniste La Réunion, nous concevons chaque cuisine sur mesure La Réunion pour refléter le style et les besoins de nos clients. Notre objectif est de proposer des solutions de cuisine équipée Réunion et de cuisine personnalisée Réunion alliant qualité, confort et design moderne.</p>
                            </div>
                        </div>
                        <!-- Vision Mission Item End -->

                        <!-- Vision Mission Item Start -->
                        <div class="vision-mission-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-our-mission.svg')}}" alt="">
                            </div>
                            <div class="vision-mission-content">
                                <h3>notre mission</h3>
                                <p>Notre mission est de concevoir des espaces esthétiques et fonctionnels qui améliorent le quotidien de nos clients. En tant que cuisiniste La Réunion, nous réalisons des projets de cuisine sur mesure La Réunion, de cuisine équipée Réunion et de cuisine personnalisée Réunion, pensés pour s’adapter parfaitement aux besoins, au style et au mode de vie de chaque foyer.</p>
                            </div>
                        </div>
                        <!-- Vision Mission Item End -->
                    </div>
                    <!-- Vision Mission Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Mission End -->


    <!-- Best Seeling Start -->
    <div class="best-selling">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Best Seeling Content Start -->
                    <div class="best-selling-content">
                        <!-- Best Seeling Content Image Start -->
                        <div class="best-selling-content-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/best-selling-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Best Seeling Content Image End -->

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Nos finitions les plus populaires</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Nous utilisons uniquement des matériaux provenant de <span>fournisseurs vérifiés</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Finitions brillantes, mat et textures bois, plus de 200 couleurs disponibles. Des matériaux écologiques, avec tous les certificats à l'appui.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Best Seeling Content End -->
                </div>
                <div class="col-lg-6">
                    <!-- Best Seeling Image Start -->
                    <div class="best-selling-iamge">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/best-selling-img-2.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Best Seeling Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Best Seeling End -->


    <!-- Our Testimonial Start -->
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
    <!-- Our Testimonial End -->


    {{--<!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Rencontrez notre équipe</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Des esprits créatifs toujours prêts à <span>concevoir l'exception</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Chez CUISINE HABITAT, nous offrons des services de design d'intérieur sur mesure, adaptés à vos besoins spécifiques. De la conception à l'installation finale, nous créons des espaces uniques.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-1.jpg')}}" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>Harry R. Blackston</h3>
                                <p>Co-fondateur & PDG</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-2.jpg')}}" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>Alexa Brook</h3>
                                <p>Responsable des Ressources Humaines</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/team-3.jpg')}}" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="{{ asset('assets/images/arrow-white.svg')}}" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>Suzen Hilly</h3>
                                <p>Ingénieure civile</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->--}}

    <!-- Our Faqs Stat -->
    <div class="our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Our Faq Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Questions fréquemment posées</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Vous avez des questions ? Découvrez les réponses <span>ici</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nous avons compilé les questions les plus courantes pour vous aider à mieux comprendre nos services et processus.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading0">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                        <span>0.</span> Pourquoi choisir Cuisine Habitat Réunion ?
                                    </button>
                                </h2>
                                <div id="collapse0" class="accordion-collapse collapse show" aria-labelledby="heading0" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Faire appel à Cuisine Habitat Réunion, c’est choisir un cuisiniste local qui comprend les besoins des Réunionnais.

                                            Nos avantages :
                                        </p>
                                        <ul>
                                            <li><p>Conception 100% personnalisée</p></li>
                                            <li><p>Plans 3D réalistes</p></li>
                                            <li><p>Installation professionnelle</p></li>
                                            <li><p>Matériaux résistants au climat tropical</p></li>
                                            <li><p>Suivi client sérieux</p></li>
                                            <li><p>Prix adaptés à tous les budgets</p></li>
                                        </ul>
                                        <p>
                                            Nous vous aidons à optimiser votre espace pour obtenir une cuisine pratique et agréable à vivre.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        <span>1.</span> Comment se déroule un projet de cuisine sur mesure à La Réunion ?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Notre processus commence par une étude de votre espace et de vos besoins. En tant que cuisiniste La Réunion, nous réalisons ensuite une conception 3D de votre cuisine sur mesure La Réunion, puis nous procédons à la fabrication et à l’installation complète de votre cuisine équipée Réunion.</p>                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        <span>2.</span> Combien coûte une cuisine sur mesure à La Réunion ?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Le prix d’une cuisine personnalisée Réunion dépend de la taille, des matériaux et des équipements choisis. Nous proposons un devis personnalisé afin de vous offrir la meilleure solution de cuisine équipée Réunion adaptée à votre budget.</p>                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <span>3.</span> Dans quelles villes intervenez-vous à La Réunion ?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Nous réalisons des projets de cuisine sur mesure La Réunion dans plusieurs villes de l’île, notamment à Saint-Denis, Saint-André, Saint-Louis et Le Tampon. Notre équipe vous accompagne de la conception à l’installation de votre cuisine équipée Réunion.</p>                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <span>4.</span> Proposez-vous un accompagnement pour choisir les matériaux et les équipements ?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Oui, nous vous accompagnons dans le choix des matériaux, des plans de travail, des rangements et des électroménagers. En tant que cuisiniste La Réunion, notre objectif est de concevoir une cuisine sur mesure La Réunion qui combine esthétique, durabilité et fonctionnalité. Nous vous aidons à créer une cuisine équipée Réunion et une cuisine personnalisée Réunion parfaitement adaptée à votre espace et à votre style de vie.</p>                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Our Faq Content End -->
                </div>

                <div class="col-lg-5">
                    <!-- Our Faq Image Start -->
                    <div class="our-faqs-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/faqs-image.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Our Faq Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs End -->


    <!-- How We Work Start -->
    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Comment nous travaillons</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">De la conception à l’installation <span>de votre cuisine</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">En tant que cuisiniste à La Réunion, nous vous accompagnons à chaque étape de votre projet de cuisine sur mesure La Réunion, de la première idée jusqu’à l’installation complète de votre cuisine équipée Réunion.</p>
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
                                <h3>01. Étude de votre projet</h3>
                                <p>Nous analysons votre espace, vos besoins et votre style afin de concevoir une cuisine personnalisée Réunion parfaitement adaptée à votre intérieur.</p>                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-2.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>02. Conception et plan 3D</h3>
                                <p>Nous réalisons un plan détaillé et une visualisation 3D pour vous permettre d’imaginer votre future cuisine sur mesure La Réunion avant sa fabrication.</p>                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-3.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>03. Fabrication et préparation</h3>
                                <p>Nous sélectionnons des matériaux de qualité et préparons chaque élément de votre cuisine équipée Réunion pour garantir durabilité et design.</p>                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-how-we-work-4.svg')}}" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>04. Installation de votre cuisine</h3>
                                <p>Notre équipe installe votre cuisine sur mesure La Réunion avec précision afin de vous livrer un espace fonctionnel, esthétique et prêt à être utilisé.</p>                            </div>
                        </div>
                        <!-- How We Item End -->
                    </div>
                    <!-- How We Work List End -->

                    <!-- How Work Company Slider Start -->
                    {{--<div class="how-work-company-slider">
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
                    </div>--}}
                    <!-- How Work Company Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How We Work End -->


    <!-- Our Clients Start -->
    <div class="our-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-clients-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Nos clients</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Plus de 1 000 cuisines sur mesure créées à La Réunion</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nous avons eu le privilège de concevoir et d’installer plus de mille cuisines sur mesure La Réunion, alliant design, fonctionnalité et confort. En tant que cuisiniste La Réunion, nous créons des cuisines équipées Réunion et des cuisines personnalisées Réunion qui s’adaptent parfaitement aux besoins et au style de vie de chacun de nos clients.</p>
                        </div>
                        <!-- Section Title End -->

                        {{--<!-- Client Logo Slider Start -->
                        <div class="our-client-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Client Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="{{ asset('assets/images/client-logo-1.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Client Logo End -->

                                    <!-- Client Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="{{ asset('assets/images/client-logo-2.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Client Logo End -->

                                    <!-- Client Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="{{ asset('assets/images/client-logo-3.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Client Logo End -->

                                    <!-- Client Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="{{ asset('assets/images/client-logo-4.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Client Logo End -->

                                    <!-- Client Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="{{ asset('assets/images/client-logo-1.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Client Logo End -->
                                </div>
                            </div>
                        </div>
                        <!-- Client Logo Slider End -->--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Clients End -->
@endsection
