@extends('frontend.layouts.base')

@section('heads')
    @parent
    <title>Nos Magasins à La Réunion – Cuisine Habitat</title>
    <style>
        .btnPopup a{
            color: inherit;
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nous vous attendons</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nos magasins</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Us Section Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row align-items-center">

                <div id="el-grid-maps">
                    <div class="el-container-store-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.428041019205!2d55.495185675253!3d-20.895091780720996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2178813eebf2ea35%3A0x8fcad1d54294f5ac!2sCuisine%20Habitat%20Saint-Denis!5e0!3m2!1sfr!2sma!4v1772542315690!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="btnPopup" data-url="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">
                            <a href="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">Saint-Denis</a>
                        </h3>
                        <ul>
                            <li><p>Cour Kerveguen, 22 Rue Lislet Geoffroy, Saint-Denis 97490.</p></li>
                        </ul>
                        {{--<ul>
                            <li><a href="mailto:contact@drmaxisliterie.re">contact@drmaxisliterie.re</a></li>
                            <li><a href="mailto:hedi@drmaxisliterie.re">hedi@drmaxisliterie.re</a></li>
                            <li><a href="mailto:gilles@drmaxisliterie.re">gilles@drmaxisliterie.re</a></li>
                            <li><a href="mailto:frederique@drmaxisliterie.re">frederique@drmaxisliterie.re</a></li>
                        </ul>--}}
                        <ul>
                            <li><a href="tel:0693027207">0693 02 72 07</a></li>
                            <li><a href="tel:0262818208">02 62 81 82 08</a></li>
                        </ul>
                    </div>
                    <div class="el-container-store-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.498847845047!2d55.41155747618551!3d-21.291296282141314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2182a1f13d38594b%3A0xe5ea3469ef8088e6!2sCuisine%20Habitat%20Saint%20Louis!5e0!3m2!1sfr!2sma!4v1772542383051!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="btnPopup" data-url="{{ route('nos_magasins.show', ['storeId' => "saint-louis"]) }}">
                            <a href="{{ route('nos_magasins.show', ['storeId' => "saint-louis"]) }}">Saint-Louis</a>
                        </h3>
                        <ul>
                            <li><p>200 N1C, Saint-Louis 97450, La Réunion.</p></li>
                        </ul>
                        {{--<ul>
                            <li><a href="mailto:jeremy.jardon@drmaxisliterie.re">jeremy.jardon@drmaxisliterie.re</a></li>
                            <li><a href="mailto:coralie.lauret@drmaxisliterie.re">coralie.lauret@drmaxisliterie.re</a></li>
                        </ul>--}}
                        <ul>
                            <li><a href="tel:0692877123">06 92 87 71 23</a></li>
                            <li><a href="tel:0262572638">02 62 57 26 38</a></li>
                        </ul>
                    </div>
                    <div class="el-container-store-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7710144605508!2d55.657835076176895!3d-20.961708971265487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217887322ea4bd95%3A0x88aff53845140b6a!2sCuisine%20habitat%20Saint-Andre!5e0!3m2!1sfr!2sma!4v1772542409803!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="btnPopup" data-url="{{ route('nos_magasins.show', ['storeId' => "saint-andre"]) }}">
                            <a href="{{ route('nos_magasins.show', ['storeId' => "saint-andre"]) }}">Saint-André</a>
                        </h3>
                        <ul>
                            <li><p>11 Zone de la Cocoteraie, Saint-André 97440, La Réunion.</p></li>
                        </ul>
                        {{--<ul>
                            <li><a href="mailto:contact@drmaxisliterie.re">contact@drmaxisliterie.re</a></li>
                            <li><a href="mailto:hedi@drmaxisliterie.re">hedi@drmaxisliterie.re</a></li>
                            <li><a href="mailto:gilles@drmaxisliterie.re">gilles@drmaxisliterie.re</a></li>
                            <li><a href="mailto:frederique@drmaxisliterie.re">frederique@drmaxisliterie.re</a></li>
                        </ul>--}}
                        <ul>
                            <li><a href="tel:0692661542">06 92 66 15 42</a></li>
                            <li><a href="tel:0262250340">02 62 25 03 40</a></li>
                        </ul>
                    </div>
                    <div class="el-container-store-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.8316030661686!2d55.5117430761851!3d-21.27813238170364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21780b762357d713%3A0xa00bf58d76bd18ef!2sCuisine%20Habitat!5e0!3m2!1sfr!2sma!4v1772542480299!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h3 class="btnPopup" data-url="{{ route('nos_magasins.show', ['storeId' => "tampon"]) }}">
                            <a href="{{ route('nos_magasins.show', ['storeId' => "tampon"]) }}">Le Tampon</a>
                        </h3>
                        <ul>
                            <li><p>267 rue Hubert Delisle, 97430 le Tampon.</p></li>
                        </ul>
                        {{--<ul>
                            <li><a href="mailto:jeremy.jardon@drmaxisliterie.re">jeremy.jardon@drmaxisliterie.re</a></li>
                            <li><a href="mailto:coralie.lauret@drmaxisliterie.re">coralie.lauret@drmaxisliterie.re</a></li>
                        </ul>--}}
                        <ul>
                            <li><a href="tel:0692113848">06 92 11 38 48</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <div id="dialog-store" style="display:none;"></div>

@endsection
