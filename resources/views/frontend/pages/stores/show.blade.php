@php
    $h1 = null;
    $p = null;
    $range = null;
    if($storeId === "saint-denis"){
        $h1 = "Cuisiniste à La Réunion – Cuisine sur mesure à Saint-Denis";
        $p = <<<p
            Référence en tant que cuisiniste à La Réunion,
            Cuisine-Habitat vous accompagne dans la création de votre cuisine sur mesure à La Réunion, pensée pour s’adapter parfaitement à
            votre espace, votre style de vie et vos exigences esthétiques.

            Notre équipe de cuisinistes à La Réunion conçoit et
            installe des cuisines équipées à La Réunion alliant design contemporain,
            matériaux de qualité et finitions haut de gamme. Chaque cuisine personnalisée à La Réunion est imaginée comme une pièce unique,
            où fonctionnalité, optimisation des rangements et élégance s’harmonisent parfaitement.

            De la conception 3D à la pose finale,
            nous mettons notre savoir-faire au service de votre projet pour
            transformer votre intérieur en un espace moderne,
            raffiné et durable. Faites confiance à un cuisiniste à La
            Réunion reconnu pour son expertise locale et son accompagnement sur mesure.
        p;
        $range = 20;

    }elseif ($storeId === "saint-louis"){

        $h1 = "Cuisiniste à La Réunion – Cuisine sur mesure à Saint-Louis";

        $p = <<<p
        Référence incontournable en tant que cuisiniste à La Réunion,
        Cuisine-Habitat accompagne les habitants de Saint-Louis dans la création de leur cuisine sur mesure, pensée pour s’adapter parfaitement à
        leur espace, leur style de vie et leurs exigences esthétiques.

        Notre équipe de cuisinistes à La Réunion conçoit et
        installe des cuisines équipées à Saint-Louis alliant design contemporain,
        matériaux durables et finitions haut de gamme. Chaque cuisine personnalisée à Saint-Louis est imaginée comme une pièce unique,
        où fonctionnalité, optimisation des rangements et élégance se combinent harmonieusement.

        De la conception 3D à la pose finale,
        nous mettons notre savoir-faire au service de votre projet pour
        transformer votre intérieur en un espace moderne,
        raffiné et durable. Faites confiance à un cuisiniste à La Réunion reconnu pour son expertise locale et son accompagnement sur mesure.
        p;
        $range = 15;
    }elseif ($storeId === "saint-andre"){

        $h1 = "Cuisiniste à La Réunion – Cuisine sur mesure à Saint-André";

        $p = <<<p
        Référence reconnue en tant que cuisiniste à La Réunion,
        Cuisine-Habitat accompagne les habitants de Saint-André dans la création de leur cuisine sur mesure, pensée pour s’adapter parfaitement à
        leur espace, leur style de vie et leurs besoins spécifiques.

        Notre équipe de cuisinistes à La Réunion conçoit et
        installe des cuisines équipées à Saint-André, alliant design contemporain,
        matériaux de qualité et finitions haut de gamme. Chaque cuisine personnalisée à Saint-André est conçue comme un espace unique,
        où fonctionnalité, optimisation des rangements et élégance se rencontrent harmonieusement.

        De la conception 3D à l’installation finale,
        nous mettons notre expertise au service de votre projet pour
        transformer votre intérieur en un espace moderne,
        raffiné et durable. Faites confiance à un cuisiniste à La Réunion reconnu pour son savoir-faire local et son accompagnement sur mesure.
        p;
        $range = 12;
    }else{

        $h1 = "Cuisiniste à La Réunion – Cuisine sur mesure au Tampon";

        $p = <<<p
        Référence incontournable en tant que cuisiniste à La Réunion,
        Cuisine-Habitat accompagne les habitants du Tampon dans la création de leur cuisine sur mesure, conçue pour s’adapter parfaitement à
        leur espace, leur style de vie et leurs exigences esthétiques.

        Notre équipe de cuisinistes à La Réunion conçoit et
        installe des cuisines équipées au Tampon, alliant design contemporain,
        matériaux de qualité et finitions haut de gamme. Chaque cuisine personnalisée au Tampon est pensée comme une pièce unique,
        où fonctionnalité, optimisation des rangements et élégance se combinent harmonieusement.

        De la conception 3D à la pose finale,
        nous mettons notre savoir-faire au service de votre projet pour
        transformer votre intérieur en un espace moderne,
        raffiné et durable. Faites confiance à un cuisiniste à La Réunion reconnu pour son expertise locale et son accompagnement sur mesure.
        p;
        $range = 10;
    }
@endphp
@extends('frontend.layouts.base')
@section('heads')
    @parent
    <title>{{ $h1 }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <style>
        #el-grid{
            column-count: 1;          /* nombre de colonnes desktop */
            column-gap: 1rem;
            row-gap: 1rem;
        }
        #el-grid img{
            width: 100%;
            margin-bottom: 20px;
            break-inside: avoid;      /* évite que l'image se coupe */
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
            box-shadow: 0 0 3px rgba(0, 0, 0, .15);
        }
        #el-grid img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 10px rgba(0, 0, 0, .15);
        }
        p{
            font-family: sans-serif;
            color: #64686d;
            margin-top: 1rem;
        }
        @media all and (min-width: 575px) {
            #el-grid{
                column-count: 2;          /* nombre de colonnes desktop */
            }
        }
        @media all and (min-width: 1200px) {
            #el-grid{
                column-count: 3;          /* nombre de colonnes desktop */
            }
        }
        @media all and (min-width: 1400px) {
            #el-grid{
                column-count: 4;          /* nombre de colonnes desktop */
            }
        }
    </style>
@endsection
@section('main-content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ explode('Cuisiniste à La Réunion –', $h1)[1] }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Nos magasins</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ explode('Cuisiniste à La Réunion – Cuisine sur mesure ', $h1)[1] }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div style="padding-bottom: 0" class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">

                        <div class="service-entry">
                            <!-- Section Title Start -->
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Cuisiniste <span>{{ explode('Cuisiniste à La Réunion – Cuisine sur mesure ', $h1)[1] }}</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                {{ $p }}
                            </p>
                            <div id="el-grid">
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/stores/'. $storeId .'/'. $index . '.jpg') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis">
                                            <img src="{{ asset('assets/images/stores/'. $storeId .'/'. $index . '.jpg') }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="google-map" style="padding-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Numéro de téléphone</h3>
                                @switch($storeId)
                                    @case("saint-denis")
                                        <p>06 93 02 72 07</p>
                                        <p>02 62 81 82 08</p>
                                        @break
                                    @case("saint-louis")
                                        <p>06 92 87 71 23</p>
                                        <p>02 62 57 26 38</p>
                                        @break
                                    @case("saint-andre")
                                        <p>06 92 66 15 42</p>
                                        <p>02 62 25 03 40</p>
                                        @break
                                    @case("tampon")
                                        <p>06 92 11 38 48 - Le Tampon</p>
                                        @break
                                @endswitch
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Support e-mail</h3>
                                <p>contact@cuisinehabitat.re</p>
                                <p>service@cuisinehabitat.re</p>
                                <p>info@cuisinehabitat.re</p>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Siège social</h3>
                                <ul>
                                    @switch($storeId)
                                        @case("saint-denis")
                                            <li><p>Cour Kerveguen, 22 Rue Lislet Geoffroy, Saint-Denis 97490, Réunion</p></li>
                                            @break
                                        @case("saint-louis")
                                            <li><p>200 N1C, Saint-Louis 97450, Réunion</p></li>
                                            @break
                                        @case("saint-andre")
                                            <li><p>Résidence LES COCOTIERS, 11 Zone de la Cocoteraie, Saint-André 97440, Réunion</p></li>
                                            @break
                                        @case("tampon")
                                            <li><p>267 rue Hubert Delisle, 97430 le Tampon.</p></li>
                                            @break
                                    @endswitch
                                </ul>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        @parent
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

        <script>
            $('.btnPopup').click(function() {
                var url = $(this).data('url'); // récupère l'URL complète générée par Laravel

                $('#dialog-store').load(url, function() {
                    $(this).dialog({
                        modal: true,
                        height: 'auto',
                        maxHeight: $(window).height() * 0.8, // 80% de l'écran
                        width: '80%',        // largeur en %
                        maxWidth: 500,       // largeur max sur desktop
                        fluid: true,         // option personnalisée (voir plus bas)
                        resizable: false,
                        draggable: false,
                        title: "Détails du magasin",
                        open: function() {
                            $('.ui-dialog').css('max-width', '85%');
                            $('body').addClass('ui-dialog-open');
                        },
                        close: function() {
                            $('body').removeClass('ui-dialog-open');
                            $(this).html(''); // vide le contenu quand on ferme
                        }
                    });
                });
            });
        </script>
    @endsection
@endsection

