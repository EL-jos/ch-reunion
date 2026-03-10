@extends('frontend.layouts.base')

@section('main-content')

    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Notre Galerie</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notre Galerie</li>
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
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Nos réalisations</h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    La cuisine est bien plus qu’un simple espace de préparation des repas. C’est un lieu de partage, de convivialité et de créativité culinaire. Chez Cuisine Habitat, nous nous spécialisons dans la conception et la pose de cuisines modernes et design qui répondent à vos besoins fonctionnels tout en reflétant votre style personnel. Découvrez nos réalisations à Saint-Louis et Saint-Denis pour vous inspirer et transformer votre propre espace culinaire.
                </p>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Mais Pourquoi Choisir une Cuisine Moderne ?</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Esthétique et Fonctionnalité</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Les cuisines modernes combinent une esthétique épurée avec une fonctionnalité maximale. Elles sont conçues pour être à la fois belles et pratiques.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Technologies Avancées</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Les cuisines modernes intègrent des technologies de pointe, comme les appareils connectés et les systèmes de gestion de l’énergie, pour faciliter votre quotidien.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Matériaux Durables</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Les matériaux utilisés dans les cuisines modernes sont souvent durables et faciles à entretenir, ce qui assure une longévité et une esthétique durable.
                </p>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous proposons un service sur mesure pour donner vie à vos idées tout en tenant compte des influences actuelles :
                </p>
                <div class="service-entry">
                    <div class="service-entry-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>Style tendance</li>
                            <li>Détails soignés</li>
                            <li>Pose de qualité</li>
                            <li>Cuisine équipée</li>
                            <li>Devis gratuit : conception et pose de cuisine moderne et design à Saint-Louis Saint-denis.</li>
                        </ul>
                    </div>
                </div>
                <div class="el-grid-gallery-one">
                    @foreach(range(1, 4) as $index)
                        <img src="{{ asset('assets/images/gallery/'. $index .'.jpg') }}" alt="" />
                    @endforeach
                </div>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Projets Réalisés à Saint-Louis</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Minimaliste</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Une cuisine moderne avec des lignes épurées, des couleurs neutres et des matériaux de haute qualité, parfaite pour un appartement contemporain.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Familiale</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Une cuisine spacieuse conçue pour une famille, avec un grand îlot central, des rangements optimisés et des appareils électroménagers de pointe.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Industrielle</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Un design industriel avec des éléments en métal et en bois, créant une ambiance urbaine et chic.
                </p>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Projets Réalisés à Saint-Denis</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Compacte</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Une cuisine compacte mais fonctionnelle, idéale pour les petits espaces, avec des solutions de rangement intelligentes et des appareils intégrés.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Luxe</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Une cuisine de luxe avec des matériaux haut de gamme, des finitions soignées et des équipements dernier cri.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Cuisine Écologique</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Une cuisine écologique utilisant des matériaux durables et des technologies écoénergétiques, reflétant un engagement envers l’environnement.
                </p>
                <div class="el-grid-gallery-two">
                    @foreach(range(5, 7) as $index)
                        <img src="{{ asset('assets/images/gallery/'. $index .'.jpg') }}" alt="" />
                    @endforeach
                </div>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Conception sur Mesure</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Adaptation à l’Espace</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Chaque cuisine que nous concevons est adaptée à l’espace disponible, maximisant l’utilisation de chaque centimètre carré.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Répondre à Vos Besoins</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous prenons en compte vos besoins spécifiques, qu’il s’agisse de rangements, d’îlots de cuisine ou de plans de travail spacieux.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Style Personnalisé</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Que vous préfériez un style minimaliste, industriel ou scandinave, nous créons une cuisine qui correspond à votre vision.
                </p>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Matériaux et Finitions</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Plans de Travail</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous offrons une gamme variée de matériaux pour les plans de travail, y compris le quartz, le granite et le stratifié.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Armoires et Tiroirs</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nos armoires et tiroirs sont disponibles dans différentes finitions et couleurs, permettant une personnalisation complète.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Électroménager Intégré</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous intégrons des appareils électroménagers de haute qualité qui s’harmonisent parfaitement avec le design de votre cuisine.
                </p>
                <div class="el-grid-gallery-three">
                    @foreach(range(8, 9) as $index)
                        <img src="{{ asset('assets/images/gallery/'. $index .'.jpg') }}" alt="" />
                    @endforeach
                </div>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Processus de Conception</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Étude et Conseil</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous commençons par une consultation approfondie pour comprendre vos besoins et vos attentes.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Conception 3D</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nous créons des plans en 3D pour vous donner une vision claire de votre future cuisine avant le début des travaux.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Installation</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Nos équipes de pose assurent une installation rapide et sans tracas, avec un souci du détail et de la perfection
                </p>
                <div class="section-title">
                    <h3 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Prendre Contact</h3>
                </div>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Demande de Devis</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Contactez-nous pour obtenir un devis personnalisé et discuter de votre projet de cuisine.
                </p>
                <div class="section-title">
                    <h5 class="text-anime-style-2" data-cursor="-opaque">Visite de notre Showroom</h5>
                </div>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Venez visiter notre showroom pour voir nos modèles de cuisines modernes et discuter avec nos experts.
                </p>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    Ainsi, transformez votre cuisine avec nos solutions de conception et de pose sur mesure. Contactez-nous dès aujourd’hui pour commencer à créer la cuisine de vos rêves.
                </p>
            </div>
        </div>
    </div>

@endsection
