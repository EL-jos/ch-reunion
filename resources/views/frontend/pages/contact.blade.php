@extends('frontend.layouts.base')

@section('main-content')

    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Nous joindre</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nous joindre</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/contact-us-image.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Vous avez un projet de cuisine ?</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Demandez votre devis cuisine gratuit <span>à La Réunion</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Contactez Cuisine Habitat Réunion pour une étude gratuite.</p> <br />
                            <div class="service-entry" style="margin-bottom: 0">
                                <div class="service-entry-list wow fadeInUp" data-wow-delay="0.6s">
                                    <ul>
                                        <li>Devis gratuit</li>
                                        <li>Conseils personnalisés</li>
                                        <li>Plans 3D</li>
                                        <li>Installation incluse</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">Votre projet cuisine commence ici.</p>
                        </div>

                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form id="contactForm" action="{{ route('contact.page') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nom*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Adresse e-mail*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Votre téléphone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <select name="city" id="city" class="form-control" required>
                                            <option value="" disabled>Ville ?</option>
                                            <option value="saint-denis">Saint-Denis</option>
                                            <option value="saint-louis">Saint-Louis</option>
                                            <option value="saint-andré">Saint-André</option>
                                            <option value="tampon">Le Tampon</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Votre message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Envoyer</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>

    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Nous contacter</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Entrons en contact</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Contactez-nous dès aujourd'hui pour discuter de vos besoins en aménagement. Appelez-nous, envoyez-nous un email ou remplissez le formulaire, nous reviendrons vers vous rapidement.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7454.862503662787!2d55.49166042913768!3d-20.894962499999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2178813eebf2ea35%3A0x8fcad1d54294f5ac!2sCuisine%20Habitat%20Saint-Denis!5e0!3m2!1sen!2sma!4v1743597273970!5m2!1sen!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4821.0786521018!2d55.40852252535559!3d-21.288892960196105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2182a1f13d38594b%3A0xe5ea3469ef8088e6!2sCuisine%20Habitat%20Saint%20Louis!5e0!3m2!1sen!2sma!4v1743594724740!5m2!1sen!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5119.020802630611!2d55.65776410660101!3d-20.96219226198306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217887322ea4bd95%3A0x88aff53845140b6a!2sCuisine%20habitat%20Saint-Andre!5e0!3m2!1sen!2sma!4v1743597230011!5m2!1sen!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.8314767462043!2d55.51174307526352!3d-21.27813738043433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21780b762357d713%3A0xa00bf58d76bd18ef!2sCuisine%20Habitat%20Tampon!5e0!3m2!1sfr!2sma!4v1772634098969!5m2!1sfr!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Numéro de téléphone</h3>
                                <p>06 93 02 72 07 - Saint-Denis</p>
                                <p>02 62 81 82 08 - Saint-Denis</p>

                                <p>06 92 87 71 23 - Saint-Louis</p>
                                <p>02 62 57 26 38 - Saint-Louis</p>

                                <p>06 92 66 15 42 - Saint-André</p>
                                <p>02 62 25 03 40 - Saint-André</p>

                                <p>06 92 11 38 48 - Le Tampon</p>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Support e-mail</h3>
                                <p>contact@cuisinehabitat.re</p>
                                <p>service@cuisinehabitat.re</p>
                                <p>info@cuisinehabitat.re</p>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Sièges sociaux</h3>
                                <ul>
                                    <li><p>Cour Kerveguen, 22 Rue Lislet Geoffroy, Saint-Denis 97490, Réunion</p></li>
                                    <li><p>200 N1C, Saint-Louis 97450, Réunion</p></li>
                                    <li><p>Résidence LES COCOTIERS, 11 Zone de la Cocoteraie, Saint-André 97440, Réunion</p></li>
                                    <li><p>267 rue Hubert Delisle, 97430 le Tampon.</p></li>
                                </ul>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>

        </div>
    </div>
@endsection
