@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Électroménager</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Électroménager</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Our Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Électroménager : Guide Complet pour Choisir vos Appareils</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        L’achat d’appareils électroménagers est une étape essentielle pour équiper votre maison et améliorer votre quotidien. Ces appareils facilitent les tâches ménagères, économisent du temps et de l’énergie, et apportent un confort supplémentaire.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Cependant, avec la multitude de choix disponibles sur le marché, il peut être difficile de savoir quels appareils sont les mieux adaptés à vos besoins.
                    </p>
                    <div class="section-title">
                        <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Types d’appareils électroménagers</h3>
                    </div>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Appareils de cuisine</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Les appareils de cuisine comprennent les réfrigérateurs, les fours, les micro-ondes, les lave-vaisselle, et bien d’autres. Ils jouent un rôle crucial dans la préparation et la conservation des aliments.
                    </p>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Appareils pour le soin du linge</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Cela inclut les machines à laver, les sèche-linge et les fers à repasser. Ces appareils rendent le lavage, le séchage et le repassage des vêtements plus efficaces et moins chronophages.
                    </p>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Appareils de nettoyage</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Les aspirateurs, les nettoyeurs vapeur et les robots aspirateurs sont essentiels pour maintenir votre maison propre. Ils permettent de gagner du temps et d’améliorer l’hygiène de votre environnement domestique.
                    </p>
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Réfrigérateurs intégrables</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Aménager une cuisine fonctionnelle et esthétique nécessite de faire des choix judicieux concernant les équipements et les surfaces.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Les réfrigérateurs sont des appareils électroménagers indispensables pour la conservation des aliments. Choisissez un modèle avec une capacité adaptée à vos besoins et des fonctionnalités supplémentaires comme les distributeurs d’eau et de glace.
                    </p>
                    <div class="el-grid-evier-granit">
                        <img src="{{ asset('assets/images/electromenager/1.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/electromenager/2.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/electromenager/3.jpg') }}" alt="" />
                    </div>
                    <div class="section-title">
                        <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Types de réfrigérateurs</h3>
                    </div>
                    <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>
                                <strong>Réfrigérateurs à une porte</strong> : Compacts et idéaux pour les petites cuisines.
                            </li>
                            <li>
                                <strong>Réfrigérateurs à deux portes</strong> : Séparant le congélateur et le réfrigérateur, souvent plus spacieux.
                            </li>
                            <li>
                                <strong>Réfrigérateurs américains</strong>: Offrant une grande capacité de stockage avec des distributeurs d’eau et de glace.
                            </li>
                            <li>
                                <strong>Réfrigérateurs encastrables</strong>: S’intègrent parfaitement dans le design de la cuisine pour un look homogène.
                            </li>
                        </ul>
                    </div>
                    <div class="section-title">
                        <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Critères de sélection des réfrigérateurs</h3>
                    </div>
                    <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>
                                <strong>Capacité</strong> : Choisissez en fonction de la taille de votre famille et de vos habitudes alimentaires.
                            </li>
                            <li>
                                <strong>Efficacité énergétique</strong> : Optez pour des modèles économes en énergie pour réduire vos factures et votre empreinte écologique.
                            </li>
                            <li>
                                <strong>Fonctionnalités</strong>: Distributeurs d’eau et de glace, compartiments réglables en température, alarmes de porte ouverte.
                            </li>
                            <li>
                                <strong>Design</strong>: Considérez l’esthétique et comment le réfrigérateur s’intégrera dans votre cuisine.
                            </li>
                        </ul>
                    </div>
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Hottes de cuisine</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Les hottes plan de travail se font discrètes. Escamotable ou intégrée directement à la plaque de cuisson, il y’en a pour tous les goûts chez Cuisine Habitat
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Par ailleurs, elles s’avèrent essentielles pour éliminer les odeurs, la fumée et la graisse de l’air lors de la cuisson en cuisine et contribuent à maintenir un environnement sain et agréable dans la cuisine.
                    </p>
                    <div class="el-grid-evier-granit">
                        <img src="{{ asset('assets/images/electromenager/4.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/electromenager/5.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/electromenager/6.jpg') }}" alt="" />
                    </div>
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Hotte plan de travail</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Le plan de travail est une surface clé dans la cuisine, utilisée pour préparer les repas, poser les ustensiles et parfois même pour manger. Il doit être à la fois esthétique, durable et facile à entretenir. Toutefois, un entretien régulier est nécessaire pour prolonger sa durée de vie.
                    </p>
                    <style>
                        @media all and (min-width: 1200px) {
                            .el-grid-hpl-two {
                                grid-template-columns: repeat(3, 1fr);
                            }
                        }
                    </style>
                    <div class="el-grid-hpl-two">
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/electromenager/7.jpeg') }}" alt="" />
                            </div>
                            <span>HOTTE PLAN DE TRAVAIL</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/electromenager/8.jpeg') }}" alt="" />
                            </div>
                            <span>PRISE PLAN DE TRAVAIL ENCASTRABLE</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/electromenager/9.jpeg') }}" alt="" />
                            </div>
                            <span>Bloc prise encastrable pour plan de travail</span>
                        </div>
                    </div>
                    <div class="section-title">
                        <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Conseils d’achat Électroménager</h3>
                    </div>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Réfrigérateurs</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Comparez les modèles : Lisez les avis en ligne et comparez les fonctionnalités pour trouver le meilleur rapport qualité-prix.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Vérifiez les garanties : Assurez-vous que le modèle choisi est couvert par une garantie adéquate.
                    </p>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Hottes de cuisine</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Testez le niveau sonore : Si possible, écoutez la hotte en fonctionnement avant d’acheter.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Évaluez la facilité d’entretien : Préférez des modèles avec des filtres faciles à retirer et à nettoyer.
                    </p>
                    <div class="section-title">
                        <h5 class="text-anime-style-2" data-cursor="-opaque">Plans de travail</h5>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Demandez des échantillons : Avant de vous décider, demandez des échantillons pour voir comment le matériau se marie avec le reste de votre cuisine.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Considérez la compatibilité : Assurez-vous que le matériau choisi est compatible avec les autres éléments de votre cuisine, notamment en termes de couleur et de style.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->
@endsection
