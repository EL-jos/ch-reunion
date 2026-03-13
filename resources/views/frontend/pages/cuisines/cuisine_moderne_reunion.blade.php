@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Cuisine moderne à La Réunion | Cuisine Habitat</title>
    <meta name="description" content="Découvrez nos cuisines modernes à La Réunion : lignes épurées, rangements optimisés, matériaux actuels et accompagnement sur mesure.">
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Cuisine moderne à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cuisines</li>
                                <li class="breadcrumb-item active" aria-current="page">Cuisine moderne à La Réunion</li>
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
                                Aujourd’hui, la cuisine moderne est devenue un véritable espace de vie au cœur de la maison.
                                À La Réunion, de nombreux foyers souhaitent une cuisine à la fois esthétique, pratique et parfaitement intégrée à leur intérieur.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les cuisines modernes se caractérisent par des lignes épurées, des matériaux contemporains et des solutions de rangement intelligentes.
                                Elles permettent de créer un espace élégant tout en facilitant le quotidien.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous concevons des cuisines modernes à La Réunion adaptées à votre espace et à votre mode de vie.
                                Chaque projet est étudié pour optimiser l’organisation de la cuisine, améliorer la circulation et proposer un design harmonieux.
                            </p>

                            <h2 class="text-anime-style-2" data-cursor="-opaque">Qu’est-ce qu’une <span>cuisine moderne ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine moderne se distingue par son design épuré et sa fonctionnalité.
                                Contrairement aux cuisines traditionnelles, elle privilégie des lignes simples et des espaces ouverts.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les meubles sont souvent sans poignées ou équipés de systèmes d’ouverture discrets afin de créer un rendu minimaliste.
                                Les matériaux utilisés sont choisis pour leur durabilité et leur facilité d’entretien.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans une cuisine moderne, l’organisation de l’espace est essentielle.
                                Les rangements sont optimisés afin de garder un plan de travail dégagé et agréable à utiliser.
                            </p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                De plus, les cuisines modernes sont souvent conçues pour s’intégrer harmonieusement dans des pièces ouvertes sur le salon ou la salle à manger.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Si vous souhaitez une cuisine entièrement adaptée à votre intérieur, découvrez également nos solutions de <a href="{{ route('cuisine_sur_mesure_reunion.page') }}">Cuisine sur mesure à la réunion</a>
                            </p>

                            <div id="el-grid">
                                @php
                                    $range = 4
                                @endphp
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/cuisines/moderne/'. $index . '.png') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis" title="Cuisine sur-mesure">
                                            <img src="{{ asset('assets/images/cuisines/moderne/'. $index . '.png') }}" alt="Cuisine sur-mesure" title="Cuisine sur-mesure">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Les matériaux les plus utilisés dans une <span>cuisine moderne</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix des matériaux joue un rôle important dans le style et la durabilité d’une cuisine moderne.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades de cuisine modernes peuvent être réalisées en bois, en stratifié ou en laqué.
                                Le bois apporte une touche chaleureuse tandis que les finitions laquées offrent un rendu plus contemporain.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le plan de travail est également un élément central du design.
                                Les matériaux les plus utilisés dans les cuisines modernes sont le quartz, la céramique ou le granit.
                                Ces surfaces sont appréciées pour leur résistance et leur facilité d’entretien.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les couleurs jouent également un rôle important.
                                Les cuisines modernes privilégient souvent des tons neutres comme le blanc, le gris ou le noir,
                                parfois associés à des éléments bois pour créer un contraste élégant.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Cuisine moderne avec ou sans poignées : <span>que choisir ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans les cuisines modernes, deux styles principaux existent : les cuisines avec poignées et les cuisines sans poignées.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les cuisines sans poignées offrent un design très épuré.
                                Les meubles s’ouvrent grâce à des systèmes intégrés qui permettent de conserver une façade parfaitement lisse.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les cuisines avec poignées restent également très populaires.
                                Elles permettent d’ajouter une touche de style grâce au choix de poignées métalliques ou design.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix dépend souvent du style recherché et de vos habitudes d’utilisation. Un cuisiniste peut vous conseiller afin de trouver la solution la plus adaptée à votre projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Si vous souhaitez ajouter un espace convivial dans votre cuisine moderne, découvrez aussi nos modèles de <a href="{{ route('cuisine_ilot_central_reunion.page') }}">Cuisine ilot central</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Comment rendre une cuisine moderne <span>chaleureuse ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Certaines personnes pensent que les cuisines modernes peuvent paraître froides.
                                Pourtant, il existe plusieurs solutions pour créer une ambiance chaleureuse tout en conservant un style contemporain.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’utilisation du bois est l’une des solutions les plus efficaces.
                                Un plan de travail en bois ou des éléments décoratifs peuvent apporter une touche naturelle.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’éclairage joue également un rôle important.
                                Les éclairages sous meubles ou les suspensions design permettent de créer une atmosphère agréable dans la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, les accessoires et la décoration permettent de personnaliser l’espace.
                                Des plantes, des étagères ouvertes ou des objets décoratifs peuvent rendre la cuisine plus vivante.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Nos réalisations de cuisines modernes à <span>Réunion</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous accompagnons chaque année de nombreux clients dans la conception de leur cuisine moderne.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos réalisations incluent :
                            </p>
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Cuisines modernes avec îlot central</li>
                                    <li>Cuisines ouvertes sur le salon</li>
                                    <li>Cuisines compactes pour petits espaces</li>
                                    <li>Cuisines familiales avec rangements optimisés</li>
                                </ul>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chaque projet est conçu pour répondre aux besoins spécifiques du client et pour s’intégrer harmonieusement dans son intérieur.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Si vous souhaitez connaître le budget d’une cuisine moderne, consultez notre guide complet : <a href="{{ route('prix_cuisine_equipee_reunion.page') }}">Prix cuisine équipée à la réunion</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez votre devis pour une <span>cuisine moderne</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Vous souhaitez transformer votre cuisine et adopter un style moderne ?
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos concepteurs vous accompagnent dans toutes les étapes de votre projet : conception, choix des matériaux et installation.
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
                                                <span>1.</span> Quel est le prix d’une cuisine moderne à La Réunion ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Le prix dépend de la taille de la cuisine, des matériaux choisis et des équipements. Un devis personnalisé permet d’obtenir une estimation précise.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Une cuisine moderne est-elle adaptée aux petits espaces ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Oui. Les cuisines modernes sont souvent conçues pour optimiser l’espace et intégrer des solutions de rangement intelligentes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Peut-on intégrer un îlot central dans une cuisine moderne ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Oui, l’îlot central est même très fréquent dans les cuisines modernes car il permet de créer un espace convivial et pratique.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment obtenir un devis pour une cuisine moderne ?
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
