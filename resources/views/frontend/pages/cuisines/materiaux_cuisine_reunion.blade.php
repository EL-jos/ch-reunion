@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Matériaux cuisine à La Réunion</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
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
        /*@media all and (min-width: 1400px) {
            #el-grid{
                column-count: 4;          /* nombre de colonnes desktop
            }
        }*/
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Matériaux cuisine à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cuisines</li>
                                <li class="breadcrumb-item active" aria-current="page">Matériaux cuisine à La Réunion</li>
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

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix des matériaux est une étape essentielle dans la conception d’une cuisine.
                                À La Réunion, les matériaux doivent être à la fois esthétiques, résistants et adaptés au climat tropical.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades, les plans de travail et les finitions jouent un rôle important dans le style et la durabilité de la cuisine.
                                Certains matériaux sont privilégiés pour leur résistance à l’humidité, à la chaleur ou aux chocs.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous proposons une large sélection de matériaux pour cuisine à La Réunion afin de créer une cuisine durable et parfaitement adaptée à votre intérieur.
                                <br>
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>

                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quels matériaux choisir pour une <span>cuisine durable ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine est utilisée quotidiennement.
                                Il est donc important de choisir des matériaux capables de résister aux contraintes du quotidien.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les plans de travail doivent être solides et faciles à entretenir.
                                Les matériaux comme le quartz, la céramique ou le granit sont souvent privilégiés pour leur résistance aux chocs et à la chaleur.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades de cuisine peuvent être réalisées dans différents matériaux comme le bois, le stratifié ou les surfaces laquées.
                                Chaque matériau possède ses propres caractéristiques en termes d’esthétique et d’entretien.
                            </p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix dépend également du style recherché.
                                Une cuisine moderne privilégiera souvent des surfaces lisses et des couleurs neutres, tandis qu’une cuisine plus chaleureuse pourra intégrer des éléments en bois.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir différents styles d’aménagement, consultez aussi notre page sur la <a href="{{ route('cuisine_moderne_reunion.page') }}">Cuisine moderne à la réunion</a>
                            </p>

                            <h2 class="text-anime-style-2" data-cursor="-opaque">Les façades de cuisine : <span>styles et finitions</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades sont l’un des éléments les plus visibles d’une cuisine.
                                Elles jouent un rôle important dans l’esthétique générale de la pièce.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Plusieurs types de finitions existent :
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades brillantes apportent de la luminosité et donnent un aspect contemporain à la cuisine.
                            </p>

                            <div id="el-grid">
                                @php
                                    $range = 9
                                @endphp
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/cuisines/materiaux/'. $index . '.jpg') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis" title="Cuisine sur-mesure">
                                            <img src="{{ asset('assets/images/cuisines/materiaux/'. $index . '.jpg') }}" alt="Cuisine sur-mesure" title="Cuisine sur-mesure">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Matériaux adaptés au climat de La Réunion </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le climat tropical de La Réunion peut influencer le choix des matériaux de cuisine.
                                L’humidité et les variations de température doivent être prises en compte lors de la conception de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Certains matériaux sont particulièrement adaptés à ces conditions.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les surfaces HPL sont connues pour leur résistance à l’humidité et aux chocs.
                                Elles sont souvent utilisées pour les plans de travail et les façades.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La céramique est également très résistante aux températures élevées et aux rayures.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les matériaux de qualité permettent de garantir la durabilité de la cuisine tout en conservant un design moderne.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour concevoir une cuisine adaptée à votre intérieur, découvrez aussi notre page sur la <a href="{{ route('cuisine_sur_mesure_reunion.page') }}">Cuisine sur-mesure</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Comment choisir les matériaux pour votre projet cuisine ? </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix des matériaux dépend de plusieurs critères.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tout d’abord, il est important de prendre en compte l’utilisation quotidienne de la cuisine.
                                Une famille nombreuse aura par exemple besoin de surfaces particulièrement résistantes.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le style de la cuisine joue également un rôle important.
                                Certains matériaux s’intègrent mieux dans une cuisine moderne tandis que d’autres conviennent davantage à un style plus traditionnel.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, le budget peut également influencer le choix des matériaux.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir les possibilités d’aménagement et obtenir des conseils personnalisés,
                                vous pouvez rencontrer nos équipes dans notre showroom : <a href="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">à Saint-Denis</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez votre devis <span>cuisine gratuit</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chaque cuisine est unique. Le choix des matériaux dépend de votre espace, de vos préférences esthétiques et de votre budget.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos concepteurs vous accompagnent afin de choisir les matériaux les plus adaptés à votre projet.
                                <br>
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>
                            <!-- FAQs section start -->
                            <div class="our-faq-section page-faq-accordion" id="general_information">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Questions fréquentes sur les matériaux de cuisine</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <span>1.</span> Quel est le meilleur matériau pour un plan de travail de cuisine ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Le choix dépend de l’utilisation de la cuisine.
                                                    Les matériaux comme la céramique, le quartz ou le HPL sont souvent privilégiés pour leur résistance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Quels matériaux sont les plus résistants pour une cuisine ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Les surfaces comme la céramique, le quartz ou le granit offrent une excellente résistance aux rayures, à la chaleur et aux chocs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Les matériaux doivent-ils être adaptés au climat de La Réunion ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Oui. Les matériaux doivent être résistants à l’humidité et faciles à entretenir afin de garantir la durabilité de la cuisine.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment choisir les matériaux pour une cuisine sur mesure ?
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Il est conseillé de se faire accompagner par un cuisiniste afin de choisir les matériaux les plus adaptés à votre projet.
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
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
@endsection
