@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Cuisine avec îlot central à La Réunion</title>
    <meta name="description" content="Envie d’une cuisine avec îlot central à La Réunion ? Découvrez les avantages, les dimensions idéales et nos solutions sur mesure.">
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Cuisine avec îlot central à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cuisines</li>
                                <li class="breadcrumb-item active" aria-current="page">Cuisine avec îlot central à La Réunion</li>
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
                                La cuisine avec îlot central est aujourd’hui l’un des aménagements les plus recherchés dans les projets de cuisine moderne.
                                À La Réunion, ce type de cuisine séduit de plus en plus de foyers car il permet de créer un espace à la fois pratique,
                                convivial et esthétique.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’îlot central transforme la cuisine en un véritable espace de vie.
                                Il peut servir de plan de travail supplémentaire,
                                d’espace de rangement ou encore de table pour partager des repas en famille.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous concevons des cuisines avec îlot central à La Réunion adaptées à votre espace et à votre mode de vie.
                                Chaque projet est étudié afin de garantir un aménagement fonctionnel et harmonieux. <br />
                                <a href="{{ route('contact.page') }}">Demandez votre devis gratuit pour votre projet cuisine</a>
                            </p>

                            <h2 class="text-anime-style-2" data-cursor="-opaque">Pourquoi choisir un <span>îlot central ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’îlot central offre de nombreux avantages dans une cuisine.
                                Il permet avant tout d’améliorer l’organisation de l’espace et d’ajouter une surface de travail supplémentaire.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans une cuisine moderne, l’îlot central peut remplir plusieurs fonctions.
                                Il peut servir de plan de travail pour préparer les repas,
                                mais aussi de table conviviale où l’on peut manger ou discuter.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il permet également de structurer une cuisine ouverte sur le salon.
                                L’îlot crée une séparation visuelle entre les espaces tout en conservant une ambiance ouverte et lumineuse.
                            </p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, l’îlot central apporte une touche design à la cuisine.
                                Il devient souvent l’élément central de la pièce et contribue à créer une cuisine moderne et élégante.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Si vous souhaitez concevoir une cuisine personnalisée adaptée à votre intérieur, découvrez aussi notre page
                                <a href="{{ route('cuisine_sur_mesure_reunion.page') }}">Cuisine sur mesure à la réunion</a>
                            </p>

                            <div id="el-grid">
                                @php
                                    $range = 4
                                @endphp
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/cuisines/ilot_central/'. $index . '.png') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis" title="Cuisine sur-mesure">
                                            <img src="{{ asset('assets/images/cuisines/ilot_central/'. $index . '.png') }}" alt="Cuisine sur-mesure" title="Cuisine sur-mesure">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quelle surface minimum faut-il pour un <span>îlot central</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’installation d’un îlot central nécessite un espace suffisant afin de garantir une circulation confortable dans la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                En général, il est recommandé de prévoir au minimum 90 à 100 cm de passage autour de l’îlot afin de pouvoir circuler facilement.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La surface idéale dépend également de la taille de la cuisine et de la fonction de l’îlot.
                                Dans les cuisines plus spacieuses, l’îlot peut intégrer une plaque de cuisson, un évier ou des rangements supplémentaires.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans les cuisines ouvertes, l’îlot central devient souvent un véritable point de rassemblement.
                                Il permet de cuisiner tout en restant en interaction avec les autres personnes présentes dans la pièce. <br>
                                Si vous souhaitez connaître le budget d’un projet cuisine avec îlot, consultez notre guide :
                                <br>
                                <a href="{{ route('prix_cuisine_equipee_reunion.page') }}">Prix d'une cuisine à la réunion</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Îlot central : rangement, repas et convivialité</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’un des principaux avantages de l’îlot central est sa polyvalence.
                                Il peut être utilisé pour plusieurs fonctions dans la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tout d’abord, il permet d’ajouter des rangements supplémentaires.
                                Les tiroirs et les placards intégrés dans l’îlot offrent un espace pratique pour stocker les ustensiles et les accessoires de cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’îlot peut également servir d’espace repas.
                                En ajoutant quelques tabourets, il devient un coin convivial pour les petits-déjeuners ou les repas rapides.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, l’îlot central favorise les échanges et la convivialité.
                                Il permet de cuisiner tout en restant en contact avec les invités ou les membres de la famille.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir d’autres styles d’aménagement, consultez aussi notre page sur les
                                <a href="{{ route('cuisine_moderne_reunion.page') }}">Cuisines modernes</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quels matériaux choisir pour un <span>îlot central durable ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix des matériaux est essentiel pour garantir la durabilité et l’esthétique de l’îlot central.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le plan de travail de l’îlot doit être particulièrement résistant car il est souvent utilisé pour la préparation des repas.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les matériaux les plus populaires sont :
                            </p>
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Le quartz</li>
                                    <li>La céramique</li>
                                    <li>Le granit</li>
                                    <li>Le stratifié</li>
                                </ul>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Ces matériaux offrent une excellente résistance à l’humidité, aux chocs et aux taches.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades de l’îlot peuvent être réalisées dans différents matériaux afin de s’adapter au style de la cuisine.
                                Le bois apporte une touche chaleureuse tandis que les finitions laquées offrent un rendu plus contemporain.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Nos conseils pour réussir votre projet <span>cuisine avec îlot</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La réussite d’un projet de cuisine avec îlot central repose sur plusieurs éléments.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tout d’abord, il est important d’adapter la taille de l’îlot à la surface de la cuisine.
                                Un îlot trop grand peut gêner la circulation tandis qu’un îlot trop petit peut manquer de fonctionnalité.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il est également important de bien choisir l’emplacement de l’îlot afin de faciliter les déplacements entre les différentes zones de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, l’éclairage joue un rôle essentiel. Des suspensions au-dessus de l’îlot permettent de mettre en valeur cet espace et de créer une ambiance agréable.
                                <br>
                                Pour bénéficier de conseils personnalisés, vous pouvez rencontrer nos équipes dans notre showroom de
                                <a href="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">Saint-Denis</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez votre devis pour une <span>cuisine moderne</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Vous souhaitez installer une cuisine avec îlot central à La Réunion ?
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos concepteurs vous accompagnent dans chaque étape de votre projet afin de créer une cuisine fonctionnelle, esthétique et parfaitement adaptée à votre intérieur.
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>
                            <!-- FAQs section start -->
                            <div class="our-faq-section page-faq-accordion" id="general_information">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Questions fréquentes sur les cuisines modernes</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <span>1.</span> Quelle taille pour un îlot central ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    La taille dépend de la surface de la cuisine. Il est recommandé de laisser au minimum 90 cm de circulation autour de l’îlot.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Peut-on installer un îlot central dans une petite cuisine ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Dans les petites cuisines, il est parfois préférable d’opter pour un îlot compact ou une solution alternative comme une péninsule.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Un îlot central peut-il intégrer une plaque de cuisson ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Oui, certains îlots intègrent une plaque de cuisson ou un évier afin de créer un espace de travail central.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment obtenir un devis pour une cuisine avec îlot central ?
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
