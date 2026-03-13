@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Plan de travail cuisine à La Réunion</title>
    <meta name="description" content="Découvrez les plans de travail cuisine à La Réunion : HPL, céramique, quartz et autres matériaux résistants pour une cuisine durable.">
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Plan de travail cuisine à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cuisines</li>
                                <li class="breadcrumb-item active" aria-current="page">Plan de travail cuisine à La Réunion</li>
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
                                Le plan de travail est l’un des éléments les plus importants dans une cuisine.
                                C’est la surface principale utilisée pour préparer les repas, poser les ustensiles et organiser l’espace de travail.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                À La Réunion, le choix du plan de travail doit prendre en compte plusieurs critères :
                                la résistance à l’humidité, la durabilité des matériaux et bien sûr l’esthétique de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous proposons différents plans de travail pour cuisine à La Réunion afin de s’adapter à chaque projet.
                                Les matériaux disponibles permettent de créer une cuisine à la fois fonctionnelle, durable et élégante.
                                <br>
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>

                            <h2 class="text-anime-style-2" data-cursor="-opaque">Pourquoi le plan de travail est un élément central de la cuisine ? </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le plan de travail est la zone la plus utilisée dans une cuisine.
                                Il sert à préparer les repas, à poser les équipements et à organiser l’espace de travail.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Un bon plan de travail doit donc être à la fois résistant et pratique.
                                Il doit supporter la chaleur, les chocs et l’humidité tout en restant facile à nettoyer.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Mais au-delà de l’aspect pratique, le plan de travail joue aussi un rôle esthétique.
                                Il participe au style général de la cuisine et peut devenir un élément central du design.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans les cuisines modernes, il est souvent utilisé pour créer un contraste avec les façades des meubles ou pour apporter une touche naturelle grâce à certains matériaux.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir différentes configurations de cuisines, consultez aussi notre page sur la <a href="{{ route('cuisine_moderne_reunion.page') }}">Cuisine moderne à la réunion</a>
                            </p>

                            <div id="el-grid">
                                @php
                                    $range = 4
                                @endphp
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/cuisines/plan_de_travail/'. $index . '.jpg') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis" title="Cuisine sur-mesure">
                                            <img src="{{ asset('assets/images/cuisines/plan_de_travail/'. $index . '.jpg') }}" alt="Cuisine sur-mesure" title="Cuisine sur-mesure">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Les différents matériaux pour un <span>plan de travail</span>  </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il existe aujourd’hui plusieurs matériaux adaptés aux plans de travail de cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le stratifié HPL est l’un des matériaux les plus utilisés.
                                Il est apprécié pour sa résistance à l’humidité et sa facilité d’entretien. Il offre également un large choix de couleurs et de textures.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La céramique est un matériau très résistant aux rayures, à la chaleur et aux produits chimiques.
                                Elle est particulièrement adaptée aux cuisines modernes.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le quartz est également très populaire. Ce matériau combine résistance et élégance tout en offrant une grande variété de finitions.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le granit est un matériau naturel très robuste qui apporte une touche haut de gamme à la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix du matériau dépend du style de la cuisine mais aussi de l’utilisation quotidienne.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Comment choisir le bon <span>plan de travail ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix du plan de travail doit prendre en compte plusieurs critères.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tout d’abord, il est important de considérer la résistance du matériau.
                                Une cuisine utilisée intensivement nécessite un plan de travail particulièrement solide.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Ensuite, l’entretien doit être pris en compte.
                                Certains matériaux demandent un entretien spécifique tandis que d’autres sont plus faciles à nettoyer.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’esthétique est également un critère important.
                                Le plan de travail doit s’harmoniser avec les façades des meubles et le style général de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans certains projets, le plan de travail peut également être utilisé pour créer un îlot central ou un espace repas.
                                <br>
                                Pour découvrir ce type d’aménagement, consultez notre page sur la <a href="{{ route('cuisine_ilot_central_reunion.page') }}">Cuisine ilot central</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Des plans de travail adaptés au climat de La Réunion </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le climat tropical de La Réunion impose certaines contraintes dans le choix des matériaux de cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’humidité et la chaleur peuvent influencer la durabilité de certains matériaux.
                                Il est donc recommandé de choisir des surfaces résistantes et faciles à entretenir.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les matériaux comme le HPL, la céramique ou le quartz offrent une excellente résistance à ces conditions.
                                Ils sont souvent privilégiés dans les cuisines modernes.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous sélectionnons des matériaux adaptés aux conditions locales afin de garantir la durabilité de votre cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour concevoir une cuisine entièrement adaptée à votre espace, découvrez également nos solutions de <a href="{{ route('cuisine_sur_mesure_reunion.page') }}">Cuisine sur-mesure</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Des plans de travail personnalisés pour votre cuisine </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chaque cuisine possède ses propres contraintes et ses propres besoins. C’est pourquoi le plan de travail doit être choisi en fonction de votre projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nos concepteurs vous accompagnent afin de sélectionner le matériau le plus adapté à votre cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Vous pouvez découvrir différents modèles et nuanciers dans nos showrooms afin de comparer les matériaux et visualiser le rendu final.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos conseillers peuvent également vous aider à choisir un plan de travail qui s’intègre parfaitement dans votre projet cuisine
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez votre devis cuisine gratuit</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix du plan de travail dépend de plusieurs éléments : l’espace disponible, les matériaux souhaités et le style de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour connaître les possibilités adaptées à votre projet, la meilleure solution est de réaliser une étude personnalisée.
                                <br>
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>

                            <!-- FAQs section start -->
                            <div class="our-faq-section page-faq-accordion" id="general_information">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Questions fréquentes sur les plans de travail cuisine</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <span>1.</span> Quel est le meilleur matériau pour un plan de travail ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Les matériaux comme la céramique, le quartz et le HPL sont souvent privilégiés pour leur résistance et leur facilité d’entretien.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Un plan de travail peut-il être personnalisé ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Oui. Les plans de travail peuvent être réalisés dans différentes dimensions, couleurs et finitions afin de s’adapter à chaque cuisine.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Quel matériau résiste le mieux à la chaleur ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    La céramique et le granit sont particulièrement résistants aux températures élevées.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment obtenir un devis pour un plan de travail cuisine ?
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Vous pouvez demander un devis directement en ligne <a href="{{ route('contact.page') }}">en cliquant ici</a>
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
