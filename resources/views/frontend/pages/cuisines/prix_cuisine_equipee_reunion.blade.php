@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Prix cuisine équipée à La Réunion | Guide & devis</title>
    <meta name="description" content="Quel budget prévoir pour une cuisine équipée à La Réunion ? Découvrez les critères de prix et demandez un devis personnalisé.">
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Prix d’une cuisine équipée à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cuisines</li>
                                <li class="breadcrumb-item active" aria-current="page">Prix d’une cuisine équipée à La Réunion</li>
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
                                Le prix d’une cuisine équipée peut varier selon de nombreux critères.
                                À La Réunion, chaque projet est unique car il dépend de la configuration de la pièce,
                                des matériaux choisis et du niveau de personnalisation souhaité.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Contrairement à certains produits standardisés, une cuisine équipée est un projet d’aménagement complet.
                                Elle doit s’adapter à votre intérieur, à vos habitudes de vie et à vos besoins en rangement.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous accompagnons chaque client dans la conception de sa cuisine afin de proposer une solution adaptée à son budget et à son espace.
                                <br>
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quels éléments influencent le <span>prix d’une cuisine ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le budget d’une cuisine équipée dépend de plusieurs éléments.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La taille de la cuisine est l’un des premiers critères.
                                Une cuisine plus grande nécessite généralement davantage de meubles et de matériaux.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les matériaux choisis jouent également un rôle important.
                                Les façades, les plans de travail et les finitions peuvent influencer le budget du projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les équipements électroménagers représentent aussi une part importante du coût.
                                Le choix des appareils dépend des besoins et du niveau de performance souhaité.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, le niveau de personnalisation influence également le prix.
                                Une cuisine sur mesure conçue pour s’adapter parfaitement à votre espace peut nécessiter un travail de conception plus approfondi.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Si vous souhaitez créer une cuisine entièrement personnalisée, découvrez notre page dédiée à la <a href="{{ route('cuisine_sur_mesure_reunion.page') }}">Csuine sur-mesure</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Cuisine standard ou sur mesure : <span>quelle différence de budget ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il existe généralement deux grandes approches pour aménager une cuisine : la cuisine standard et la cuisine sur mesure.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine standard est composée de modules prédéfinis qui s’adaptent à la plupart des espaces.
                                Cette solution peut convenir à certaines configurations simples.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La cuisine sur mesure permet en revanche de concevoir un projet entièrement adapté à votre intérieur.
                                Les meubles sont conçus selon les dimensions exactes de la pièce, ce qui permet d’optimiser chaque espace.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                À La Réunion, les cuisines sur mesure sont souvent privilégiées car elles permettent de s’adapter aux particularités des logements et d’offrir une meilleure optimisation de l’espace.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir différents styles de cuisines personnalisées, consultez également notre page sur les <a href="{{ route('cuisine_moderne_reunion.page') }}">Cuisines modernes</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quel budget selon la taille de la cuisine ? </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La taille de la cuisine influence naturellement le budget du projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine compacte nécessitera généralement moins de meubles et de matériaux qu’une grande cuisine ouverte.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Cependant, même une petite cuisine peut nécessiter un travail de conception spécifique afin d’optimiser l’espace disponible.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans les cuisines plus spacieuses,
                                certains éléments peuvent également être ajoutés,
                                comme un îlot central ou des rangements supplémentaires.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour découvrir les possibilités d’aménagement avec un îlot central, consultez notre page dédiée à la
                                <a href="{{ route('cuisine_ilot_central_reunion.page') }}">Cuisine îlot central</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Comment optimiser son budget sans sacrifier la qualité ? </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il est possible d’optimiser son budget tout en conservant une cuisine de qualité.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le premier conseil consiste à bien définir ses priorités.
                                Certains éléments comme les meubles et le plan de travail doivent être choisis avec attention afin de garantir la durabilité de la cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Il est également possible de combiner différents matériaux afin d’obtenir un bon équilibre entre esthétique et budget.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                L’accompagnement d’un cuisiniste permet aussi de trouver des solutions adaptées à votre projet et à votre budget.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos conseillers peuvent vous guider dans le choix des matériaux et des équipements afin de concevoir une cuisine durable et fonctionnelle.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Vous pouvez également rencontrer nos équipes dans notre showroom de <a href="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">Saint-Denis</a>
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez un devis <span>cuisine gratuit</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chaque projet de cuisine est unique. C’est pourquoi il est difficile de définir un prix universel sans connaître les détails du projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La meilleure solution pour connaître le budget de votre future cuisine est de réaliser une étude personnalisée.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Nos concepteurs analysent votre espace, vos besoins et vos préférences afin de vous proposer une cuisine adaptée à votre intérieur.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{ route('contact.page') }}">Demandez votre devis cuisine gratuit </a>
                            </p>
                            <!-- FAQs section start -->
                            <div class="our-faq-section page-faq-accordion" id="general_information">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Questions fréquentes sur le prix d’une cuisine équipée</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <span>1.</span> Quel est le prix d’une cuisine équipée à La Réunion ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Le prix dépend de plusieurs critères comme la taille de la cuisine, les matériaux choisis et les équipements intégrés. Un devis personnalisé permet d’obtenir une estimation précise.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Pourquoi les prix peuvent-ils varier d’un projet à l’autre ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>Chaque cuisine est conçue selon les besoins du client. Les dimensions, les matériaux et le niveau de personnalisation influencent le budget final.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Une cuisine sur mesure est-elle plus chère ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    La cuisine sur mesure peut représenter un investissement plus important,
                                                    mais elle permet d’optimiser l’espace et de créer une cuisine parfaitement adaptée à votre intérieur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment obtenir un devis pour une cuisine équipée ?
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
