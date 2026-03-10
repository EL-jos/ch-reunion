@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Votre Projet en 3 étapes</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Votre Projet en 3 étapes</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Faqs Sidebar Start -->
                    <div class="faq-sidebar">

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar CTA Image Start -->
                            <div class="sidebar-cta-image">
                                <div class="image-anime">
                                    <img src="{{ asset('assets/images/sidebar-cta-img.jpg')}}" alt="">
                                </div>
                            </div>
                            <!-- Sidebar CTA Image End -->

                            <!-- Sidebar CTA Body Start -->
                            <div class="sidebar-cta-Body">
                                <!-- Sidebar CTA Content Start -->
                                <div class="sidebar-cta-content">
                                    <h3>Comment pouvons-nous vous aider ?</h3>
                                    <p>Si vous avez des questions ou besoin d’assistance, n’hésitez pas à nous contacter. Notre équipe est à votre écoute pour répondre à vos besoins.</p>
                                </div>
                                <!-- Sidebar CTA Content End -->

                                <!-- Sidebar CTA Contact Start -->
                                <div class="sidebar-cta-contact">
                                    <!-- Sidebar CTA Contact Item Start -->
                                    <div class="sidebar-cta-contact-item">
                                        <div class="icon-box">
                                            <img src="{{('assets/images/icon-phone.svg')}}" alt="">
                                        </div>
                                        <div class="cta-contact-item-content">
                                            <p>+262 262 12 34 56</p>
                                        </div>
                                    </div>
                                    <!-- Sidebar CTA Contact Item End -->

                                    <!-- Sidebar CTA Contact Item Start -->
                                    <div class="sidebar-cta-contact-item">
                                        <div class="icon-box">
                                            <img src="{{('assets/images/icon-mail.svg')}}" alt="">
                                        </div>
                                        <div class="cta-contact-item-content">
                                            <p>contact@cuisinehabitat.re</p>
                                        </div>
                                    </div>
                                    <!-- Sidebar CTA Contact Item End -->
                                </div>
                                <!-- Sidebar CTA Contact End -->
                            </div>
                            <!-- Sidebar CTA Body End -->

                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Faqs Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="our-faq-section page-faq-accordion" id="general_information">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Plongez dans l’univers des cuisines modernes de Cuisine Habitat,
                                où chaque création est une fusion parfaite de design innovant et de fonctionnalité.
                                Laissez-vous inspirer par nos projets sur mesure, imaginés pour transformer votre espace en un lieu unique,
                                que vous rêviez d’un îlot central, d’une cuisine ouverte ou d’une configuration personnalisée.
                            </p>
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Contactez-nous pour Commencer Votre Projet</h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Prêt à donner vie à vos envies ? Cuisine Habitat vous accompagne à chaque étape, de l'idée à la réalisation finale.
                                Contactez nos experts pour discuter de vos besoins et de vos envies,
                                et découvrez comment nous pouvons créer ensemble une cuisine moderne qui vous ressemble.
                            </p>
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Cuisine Habitat – Votre Projet en 3 Étapes Simples</h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, réinventer votre cuisine en un espace à la fois moderne et fonctionnel devient un véritable plaisir.
                                Forts de notre expertise et de notre approche personnalisée,
                                nous vous guidons à chaque étape pour concevoir la cuisine qui correspond parfaitement à vos besoins et à votre style.
                            </p>
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            <span>1.</span> Prenez Rendez-vous
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Lors de votre rendez-vous, un concepteur dédié sera là pour vous écouter et comprendre vos besoins.
                                                Après avoir échangé sur vos envies et l'agencement de votre espace,
                                                il vous proposera des solutions personnalisées et réalisera des plans 3D pour vous aider à visualiser votre future cuisine.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span>2.</span> Conseil, Conception et Création Sur-Mesure
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Nous vous guidons à travers le choix des matériaux, des couleurs et des équipements, qu'il s’agisse d’un îlot central,
                                                de plans de travail en céramique ou en HPL. Grâce à notre configurateur 3D,
                                                vous pourrez voir votre cuisine prendre forme avant même son installation,
                                                assurant une création sur-mesure qui répond à vos attentes et votre budget
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <span>3.</span> Livraison et Installation
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Nos poseurs professionnels interviennent pour installer votre cuisine dans les plus brefs délais.
                                                Grâce à leur savoir-faire, chaque élément est posé avec soin et précision.
                                                Une fois l'installation terminée, vous pourrez profiter de votre nouvelle cuisine moderne et fonctionnelle, prête à embellir votre quotidien.
                                                <br>
                                                Cuisine Habitat vous offre un suivi personnalisé, de la conception à l’installation, pour garantir un résultat à la hauteur de vos attentes.
                                                Suivez ces 3 étapes simples et transformez votre cuisine en un espace de vie pratique, élégant et sur-mesure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faq End -->
@endsection
