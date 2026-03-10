@extends('frontend.layouts.base')

@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nuancier HPL</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">nuancier HPL</li>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="text-align: center">HPL : La solution pour vos plans de travail</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Extrêmement résistant à l’humidité, aux chocs incomparable et facile à entretenir, ce matériau ultra personnalisable s’adapte à toutes les situations et est idéal pour les cuisines sur-mesure.
                        Cuisine Habitat met à votre disposition un large choix de modèles et de couleurs nuancier HPL qui convient à votre style.
                    </p>
                    <div class="el-grid-hpl-one">
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/1.webp') }}" alt="" />
                            </div>
                            <span>7373 Natural Walnut</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/2.webp') }}" alt="" />
                            </div>
                            <span>5103 Valley Oak</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/3.webp') }}" alt="" />
                            </div>
                            <span>4584 Rovero Wafer</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/4.webp') }}" alt="" />
                            </div>
                            <span>4511 Rovero Fumo</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/5.webp') }}" alt="" />
                            </div>
                            <span>3393 Hypster Copper</span>
                        </div>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Quand on parle de surfaces de cuisine, vous devez savoir que la durabilité et la résistance du matériau sont tout aussi importantes que son apparence. Cuisine Habitat vous offre des surfaces HPL pour le design intérieur de cuisines.
                        <br>
                        Le matériau HPL (High Pressure Laminates) est une solution ultra personnalisable qui s’adapte à toutes les situations et extrêmement résistante à l’humidité, aux chocs, aux rayures à la chaleur 160°C et facile à entretenir
                    </p>
                    <div class="el-grid-hpl-two">
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/two/1.webp') }}" alt="" />
                            </div>
                            <span>7373 Natural Walnut</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/two/2.webp') }}" alt="" />
                            </div>
                            <span>5103 Valley Oak</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/two/3.jpg') }}" alt="" />
                            </div>
                            <span>4584 Rovero Wafer</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/two/4.jpg') }}" alt="" />
                            </div>
                            <span>4511 Rovero Fumo</span>
                        </div>
                        <div class="el-card">
                            <div class="el-boxImg">
                                <img src="{{ asset('assets/images/hpl/two/5.webp') }}" alt="" />
                            </div>
                            <span>3393 Hypster Copper</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->
@endsection
