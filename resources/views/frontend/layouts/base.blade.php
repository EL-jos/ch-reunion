<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        @section("heads")
            <!-- Meta -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="Awaiken">
            <!-- Favicon Icon -->
            <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
            <!-- Google Fonts Css-->
            <link rel="preconnect" href="https://fonts.googleapis.com/">
            <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
            <!-- jQuery UI CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
            <!-- Bootstrap Css -->
            <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
            <!-- SlickNav Css -->
            <link href="{{ asset('assets/css/slicknav.min.css')}}" rel="stylesheet">
            <!-- Swiper Css -->
            <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
            <!-- Font Awesome Icon Css-->
            <link href="{{ asset('assets/css/all.min.css')}}" rel="stylesheet" media="screen">
            <!-- Animated Css -->
            <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
            <!-- Magnific Popup Core Css File -->
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
            <!-- Mouse Cursor Css File -->
            <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css')}}">
            <!-- Main Custom Css -->
            <link href="{{ asset('assets/css/custom.css')}}?v=1.0.1" rel="stylesheet" media="screen">
            <!-- Custom Style -->
            <link rel="stylesheet" href="{{ asset('assets/css/el-style.css') }}?v=1.0.1" />
        @show
    </head>

    <body>

        <div class="preloader">
            <div class="loading-container">
                <div class="loading"></div>
                <div id="loading-icon"><img src="{{ asset('assets/images/loader.svg')}}" alt=""></div>
            </div>
        </div>

        <header class="main-header">
            <div class="header-sticky">
                <nav class="container">
                    <div class="navbar navbar-expand-lg">
                        <!-- Logo Start -->
                        <a class="navbar-brand" href="{{ route('home.page') }}">
                            <img src="{{ asset('assets/images/logo.svg')}}" width="100px" alt="Logo">
                        </a>
                        <!-- Logo End -->

                        <!-- Main Menu Start -->
                        {{--<div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about.page') }}">à propos</a></li>
                                    <li class="nav-item submenu"><a class="nav-link" href="#">Matières et couleurs</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_de_facades.page') }}">Nuanciers de façades</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_en_ceramique.page') }}">Nuanciers en céramique</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_hpl.page') }}">Nuanciers HPL</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu"><a class="nav-link" href="#">Equipements</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="#">Plan de travail </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Evier granit 3 dimensions</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Electroménager</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Solutions de rangement</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Tiroirs et équipements</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.page') }}">Projects</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery.page') }}">Réalisations</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs.page') }}">Blog</a></li>
                                </ul>
                            </div>
                            <!-- Header Btn Start -->
                            <div class="header-btn d-inline-flex">
                                <a href="{{ route('contact.page') }}" class="btn-default">nous joindre</a>
                            </div>
                            <!-- Header Btn End -->
                        </div>--}}
                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home.page') }}">accueil</a></li>
                                    <li class="nav-item submenu">
                                        <a class="nav-link" href="{{ route('nos_magasins.page') }}">Nos magasins</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nos_magasins.show', ['storeId' => "saint-denis"]) }}">Cuisiniste à Saint-Denis</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nos_magasins.show', ['storeId' => "saint-louis"]) }}">Cuisiniste à Saint-Louis</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nos_magasins.show', ['storeId' => "saint-andre"]) }}">Cuisiniste à Saint-André</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('nos_magasins.show', ['storeId' => "tampon"]) }}">Cuisiniste au Tampon</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu"><a class="nav-link" href="javascript:;">cuisine</a>
                                        <ul>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:;">matières et couleurs <i class="fa-solid fa-chevron-right"></i></a>
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_de_facades.page') }}">Nuancier des façades</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_en_ceramique.page') }}">Nuancier en céramique</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_hpl.page') }}">Nuancier HPL</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:;">Equipements <i class="fa-solid fa-chevron-right"></i></a>
                                                <ul>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('nuancier_hpl.page') }}">Plan de travail</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('evier_granit_3_dimensions.page') }}">Evier granit 3 dimensions</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('electromenager.page') }}">Electroménager</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="{{ route('solutions_de_rangement.page') }}">Solutions de rangement</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('votre_projet_en_3_etapes.page') }}">votre projet en 3 étapes</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('dressing.page') }}">dressing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('promoteur_immobilier.page') }}">promoteur immobilier</a></li>
                                    {{--<li class="nav-item"><a class="nav-link" href="{{ route('gallery.page') }}">Réalisations</a></li>--}}
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs.page') }}">Conseils</a></li>
                                </ul>
                            </div>
                            <!-- Header Btn Start -->
                            <div class="header-btn d-inline-flex">
                                <a href="{{ route('contact.page') }}" class="btn-default">Contact</a>
                            </div>
                            <!-- Header Btn End -->
                        </div>
                        <!-- Main Menu End -->
                        <div class="navbar-toggle"></div>
                    </div>
                </nav>
                <div class="responsive-menu"></div>
            </div>
        </header>

        @yield('main-content')

        @php
            $routeName = request()->route()->getName();
        @endphp
        @if($routeName !== "landing.page")
            <footer class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Footer Header Start -->
                            <div class="footer-header">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!-- Footer Logo Start -->
                                        <div class="footer-logo">
                                            <img src="{{ asset('assets/images/logo.svg')}}" width="200px" alt="Logo Cuisine Habitat">
                                        </div>
                                        <!-- Footer Logo End -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Footer Social Link Start -->
                                        <div class="footer-social-links">
                                            <div class="footer-social-link-title">
                                                <h3>Suivez-nous sur nos réseaux</h3>
                                            </div>
                                            <ul>
                                                <li><a href="https://www.facebook.com/cuisinehabitatcenter"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.instagram.com/cuisinehabitat/"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="https://www.linkedin.com/company/cuisine-habitat/"><i class="fa-brands fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Footer Social Link End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Header End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Contact Box Start -->
                            <div class="footer-contact-box footer-links">
                                <h3>Contacte - Saint-Denis</h3>
                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0693027207</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0262818208</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>contact@cuisinehabitat.re</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>Cour Kerveguen, 22 Rue Lislet Geoffroy, Saint-Denis 97490.</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Box End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Contact Box Start -->
                            <div class="footer-contact-box footer-links">
                                <h3>Contact - Saint-Louis</h3>
                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0692877123</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0262572638</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>contact@cuisinehabitat.re</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>200 N1C, Saint-Louis 97450, La Réunion.</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Box End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Contact Box Start -->
                            <div class="footer-contact-box footer-links">
                                <h3>Contact - Saint-André</h3>
                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0692661542</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0262250340</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>contact@cuisinehabitat.re</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>11 Zone de la Cocoteraie, Saint-André 97440, La Réunion.</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Box End -->
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Contact Box Start -->
                            <div class="footer-contact-box footer-links">
                                <h3>Contact - Le Tampon</h3>

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>0692113848</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>contact@cuisinehabitat.re</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->

                                <!-- Footer Contact Item Start -->
                                <div class="footer-contact-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="footer-contact-content">
                                        <p>267 rue Hubert Delisle, 97430 le Tampon.</p>
                                    </div>
                                </div>
                                <!-- Footer Contact Item End -->
                            </div>
                            <!-- Footer Contact Box End -->
                        </div>
                    </div>

                    <!-- Footer Copyright Section Start -->
                    <div class="footer-copyright">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Footer Copyright Start -->
                                <div class="footer-copyright-text">
                                    <p>Copyright © {{ \Illuminate\Support\Carbon::now()->year }} Tous droits réservés par Cuisine Habitat.</p>
                                </div>
                                <!-- Footer Copyright End -->
                            </div>
                        </div>
                    </div>
                    <!-- Footer Copyright Section End -->
                </div>
            </footer>
        @endif

        @section('scripts')
            <!-- Jquery Library File -->
            <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
            <!-- jQuery UI JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
            <!-- Bootstrap js file -->
            <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
            <!-- Validator js file -->
            <script src="{{ asset('assets/js/validator.min.js')}}"></script>
            <!-- SlickNav js file -->
            <script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
            <!-- Swiper js file -->
            <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
            <!-- Counter js file -->
            <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
            <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
            <!-- Isotop js file -->
            <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
            <!-- Magnific js file -->
            <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
            <!-- SmoothScroll -->
            <script src="{{ asset('assets/js/SmoothScroll.js')}}"></script>
            <!-- Parallax js -->
            <script src="{{ asset('assets/js/parallaxie.js')}}"></script>
            <!-- MagicCursor js file -->
            <script src="{{ asset('assets/js/gsap.min.js')}}"></script>
            <script src="{{ asset('assets/js/magiccursor.js')}}"></script>
            <!-- Text Effect js file -->
            <script src="{{ asset('assets/js/SplitText.js')}}"></script>
            <script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script>
            <!-- YTPlayer js File -->
            <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
            <!-- Wow js file -->
            <script src="{{ asset('assets/js/wow.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <!-- Main Custom js file -->
            <script src="{{ asset('assets/js/function.js')}}"></script>
        @show
    </body>

</html>
