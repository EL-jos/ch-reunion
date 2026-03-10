@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Solutions de rangement</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Solutions de rangement</li>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">Nos solutions de rangement</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Si les meubles de cuisine servent à ranger vos produits, mieux vaut bien s’organiser pour tout avoir à portée de main rapidement. Découvrez nos inspirations pour conception meuble sur mesure afin d’optimiser le rangement de chaque meuble et faciliter votre quotidien.
                    </p>

                    <div class="el-grid-evier-granit">
                        <img src="{{ asset('assets/images/solutions-de-rangement/1.jpeg') }}" alt="" />
                        <img src="{{ asset('assets/images/solutions-de-rangement/2.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/solutions-de-rangement/3.jpg') }}" alt="" />
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Les rangements modulables, Certains meubles ont plus d’un tour dans leur sac pour vous aider à optimiser le rangement. Ces meubles vous aident à améliorer le rangement, gagner de l’espace et rendre votre cuisine parfaitement fonctionnelle.
                    </p>
                    <div class="el-grid-evier-granit">
                        <img src="{{ asset('assets/images/solutions-de-rangement/4.jpeg') }}" alt="" />
                        <img src="{{ asset('assets/images/solutions-de-rangement/5.jpeg') }}" alt="" />
                        <img src="{{ asset('assets/images/solutions-de-rangement/6.jpeg') }}" alt="" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->
@endsection
