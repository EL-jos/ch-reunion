@extends('frontend.layouts.base')

@section('main-content')

    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Promoteur Immobilier</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Promoteur Immobilier</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-gallery">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Notre service sur mesure à destination des promoteurs immobiliers</h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Cuisine Habitat collabore avec les promoteurs immobiliers pour la conception de cuisines et placards à destination de projets immobiliers d’habitations neuves, de construction ou de rénovations.Nous concevons des cuisines et dressings sur mesure adaptables à tous types de promotion immobilières pour agrémenter votre projet immobilier.
                </p>
                <div id="el-grid-flex">
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Cuisine Habitat  partenaire privilégie des professionnels de l’immobilier</h3>
                            <p>
                                Partenaire privilégie des professionnels de l’immobilier. Depuis nos débuts, nous collaborons avec les promoteurs immobiliers pour la conception de cuisines et placards à destination de projets immobiliers d’habitations neuves ou de rénovations. Ces professionnels de la construction apprécient notre sens de l’écoute du service et du travail bien fait. Nous veillons à appliquer ces principes à chaque stade du déroulement du projet. Nos process et systèmes ont été développés spécifiquement afin de répondre aux attentes de tous les intervenants et à la complexité du métier.
                            </p>
                            <a href="{{ route('contact.page') }}">Contactez-nous</a>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/1.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Un interlocuteur dédié et spécifique pour chaque étape du process</h3>
                            <p>
                                Nouer une relation privilégiée avec nos clients fait partie de nos priorités. C’est pourquoi, pour chaque étape du process, un interlocuteur dédié vous accompagne.
                            </p>
                            <p>
                                Un Commercial vous guidera dans vos choix afin que les cuisines et/ou placards de votre projet reflètent son niveau de finition et cadrent avec votre budget.
                            </p>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/2.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Une réelle valeur ajoutée sur la durée</h3>
                            <p>
                                La cuisine est une pièce centrale pour la décoration d’intérieur d’une maison ou d’un appartement. Tout comme les placards, ces éléments définissent l’ambiance et le style de l’habitation.
                            </p>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/3.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <p>
                                Cuisine Habitat est présent à vos côtés pour offrir une touche unique à votre aménagement intérieur grâce à une conception et une mise en œuvre de qualité.
                            </p>
                            <p>
                                Nous assurons le suivi commercial et technique jusqu’à l’installation de nos cuisines, nos placards et dressing jusqu’à la réception par l’acquéreur.
                            </p>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/4.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Nos opérations en 2022 en quelques chiffres :</h3>
                            <p>
                                Promotions rubis 14 villas
                            </p>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/5.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Promotions Calendra : 32 Appartements</h3>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/6.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <h3>Promotions Bergamote : 75 Appartements</h3>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/7.jpg') }})"></div>
                    </div>
                    <div class="el-row">
                        <div class="el-content">
                            <p>
                                Bien que chacun de nos projets soit unique, nous avons sélectionné pour vous quelques références inspirantes pour vous donner un aperçu de nos réalisations.
                            </p>
                            <p>
                                Vous cherchez un partenaire fiable pour concevoir et installer des cuisines/placards et dressing  sur mesure en tant que promoteur immobilier. Nous sommes là pour vous épauler !
                            </p>
                            <p>
                                Contactez-nous via notre formulaire de contact en ligne pour plus d’informations ou Prenez rendez-vous avec un de nos commerciaux pour discuter de votre projet.
                            </p>
                            <a href="{{ route('contact.page') }}">Contactez-nous</a>
                        </div>
                        <div class="el-bg-img" style="background-image: url({{ asset('assets/images/promoteur-immobilier/8.jpg') }})"></div>
                    </div>
                </div>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Une expertise reconnue depuis plus de 10 ans</h3>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Avec 10ans d’expérience, notre équipe saura vous conseiller pour optimiser au mieux votre espace afin de répondre aux besoins des futurs acquéreurs. Nous vous proposons un accompagnement personnalisé pour vos projets. Pour vos projets immobiliers contactez notre responsable commercial
                </p>
            </div>
        </div>
    </div>

@endsection
