@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Cuisine sur mesure à La Réunion | Cuisine Habitat</title>
    <meta name="description" content="Cuisine Habitat conçoit votre cuisine sur mesure à La Réunion. Conception personnalisée, matériaux de qualité, pose soignée et devis gratuit.">
    <meta name="keywords" content="">
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
                column-count: 3;          /* nombre de colonnes desktop */
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Cuisine sur mesure à La Réunion</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Nos magasins</li>
                                <li class="breadcrumb-item active" aria-current="page">Cuisine sur mesure à La Réunion</li>
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
                                La cuisine est aujourd’hui l’une des pièces les plus importantes de la maison.
                                À La Réunion, elle est souvent un espace de convivialité où l’on cuisine, partage des repas en famille et reçoit des invités.
                                C’est pourquoi de plus en plus de foyers choisissent une cuisine sur mesure afin d’obtenir un aménagement parfaitement adapté à leur intérieur.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Chez Cuisine Habitat, nous concevons des cuisines personnalisées qui s’adaptent à votre espace,
                                à vos habitudes et à vos envies esthétiques.
                                Chaque projet est étudié avec attention afin de proposer une cuisine fonctionnelle,
                                durable et agréable à vivre au quotidien.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Pourquoi choisir une <span>cuisine sur mesure ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Choisir une cuisine sur mesure permet de créer un espace qui correspond parfaitement à votre logement.
                                Contrairement aux cuisines standardisées, le sur-mesure s’adapte à la configuration de votre pièce et permet d’optimiser chaque zone.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans une cuisine personnalisée, les meubles sont conçus selon les dimensions exactes de votre espace.
                                Cela permet d’exploiter intelligemment les angles, les murs et les zones difficiles à aménager.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine sur mesure offre également une grande liberté en matière de design.
                                Vous pouvez choisir les couleurs, les matériaux et les finitions qui correspondent à votre style.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, cette solution améliore l’ergonomie de votre cuisine. Les zones de préparation, de cuisson et de rangement sont organisées de manière logique afin de faciliter votre quotidien.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Comment se déroule votre projet chez <span>Cuisine Habitat ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                La création d’une cuisine sur mesure suit plusieurs étapes afin de garantir un résultat parfaitement adapté à votre projet.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tout commence par une étude de vos besoins. Nos concepteurs prennent le temps de comprendre vos attentes, votre budget et les contraintes de votre espace.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Ensuite, nous imaginons l’implantation idéale de votre cuisine. L’objectif est d’optimiser la circulation dans la pièce et de créer un aménagement pratique.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une fois la conception validée, vous choisissez les matériaux, les finitions et les équipements qui composeront votre cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Enfin, nos équipes assurent la pose de votre cuisine afin de garantir un résultat esthétique et durable.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Quels matériaux et finitions choisir pour <span>une cuisine durable ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le choix des matériaux joue un rôle essentiel dans la qualité et la durabilité d’une cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Les façades peuvent être réalisées dans différents matériaux comme le bois, le stratifié ou le laqué.
                                Chaque option offre un rendu esthétique différent et possède ses propres avantages en termes d’entretien.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le plan de travail est également un élément central de la cuisine.
                                Les matériaux les plus utilisés sont le quartz, le granit, la céramique ou le stratifié.
                                Ces surfaces offrent une bonne résistance aux chocs et à l’humidité.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine durable repose également sur le choix d’équipements de qualité et sur une conception intelligente des rangements.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Cuisine sur mesure : <span>quel budget prévoir à La Réunion ?</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Le prix d’une cuisine sur mesure dépend de plusieurs critères.
                                La taille de la pièce, les matériaux choisis, les équipements et le niveau de personnalisation influencent le budget global.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Une cuisine sur mesure représente un investissement, mais elle apporte également une réelle valeur ajoutée à votre logement.
                                Elle permet d’améliorer le confort de votre intérieur tout en optimisant l’utilisation de l’espace.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Pour obtenir une estimation précise du coût de votre projet, il est recommandé de demander un devis personnalisé.
                            </p>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Nos magasins à <span>Saint-Denis, Saint-André, Saint-Louis et Le Tampon</span> </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Cuisine Habitat dispose de plusieurs showrooms à La Réunion afin d’accompagner les clients dans la conception de leur cuisine.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Vous pouvez rencontrer nos conseillers dans nos magasins situés à :
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">

                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">

                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dans nos showrooms, vous pourrez découvrir différents modèles de cuisines, comparer les matériaux et échanger avec un concepteur afin de construire votre projet.
                            </p>
                            <!-- FAQs section start -->
                            <div class="our-faq-section page-faq-accordion" id="general_information">
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Questions fréquentes sur la cuisine sur mesure</h2>
                                </div>
                                <!-- FAQ Accordion Start -->
                                <div class="faq-accordion" id="accordion">
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <span>1.</span> Quel est le prix d’une cuisine sur mesure à La Réunion ?
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Le prix dépend de la taille de la cuisine, des matériaux choisis et des équipements intégrés. Un devis personnalisé permet d’obtenir une estimation précise.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>2.</span> Combien de temps faut-il pour installer une cuisine ?
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>L’installation d’une cuisine prend généralement entre un et trois jours selon la complexité du projet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                <span>3.</span> Peut-on créer une cuisine sur mesure pour un petit espace ?
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>Oui, le sur-mesure est particulièrement adapté aux petits espaces car il permet d’optimiser chaque zone et d’intégrer des rangements intelligents.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->

                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>4.</span> Comment obtenir un devis pour une cuisine ?
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
                            <div id="el-grid">
                                @php
                                $range = 3
                                @endphp
                                @foreach(range(1, $range) as $index)
                                    <div>
                                        <a href="{{ asset('assets/images/cuisines/sur_mesure/'. $index . '.png') }}"
                                           data-lightbox="store-gallery"
                                           data-title="Cuisine Habitat Saint-Denis" title="Cuisine sur-mesure">
                                            <img src="{{ asset('assets/images/cuisines/sur_mesure/'. $index . '.png') }}" alt="Cuisine sur-mesure" title="Cuisine sur-mesure">
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
@endsection
