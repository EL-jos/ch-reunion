@extends('frontend.layouts.base')

@section("heads")
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Page Title -->
    <title>Offre Cuisine – 2000€ d’avantages – Cuisine Habitat</title>
    <style>
        .hero::before{
            background: linear-gradient(180deg, rgba(25, 35, 36, .6) 0%, rgba(25, 35, 36, 0.9) 80.94%);
        }
        .gold-highlight{
            background: linear-gradient(
                120deg,
                #b8860b 0%,
                #ffd700 25%,
                #fff2a8 45%,
                #ffd700 60%,
                #b8860b 100%
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            font-weight: 800;
            letter-spacing: 1px;

            text-shadow:
                0 2px 10px rgba(255,215,0,0.35),
                0 0 25px rgba(255,215,0,0.25);

            position: relative;
        }
        .gold-highlight::after{
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent 30%,
                rgba(255,255,255,0.6),
                transparent 70%
            );
            animation: goldShine 3s infinite;
        }

        @keyframes goldShine{
            0%{
                left:-100%;
            }
            100%{
                left:100%;
            }
        }

        /*
        */
        .lead-section{
            display:flex;
            justify-content:center;
            align-items:center;
            padding:80px 20px;

           /* background: linear-gradient(135deg,#0f172a,#1e293b);*/
            position: fixed;
            width: 100%;
            height: 100dvh;
            top: 0;
            left: 0;
            backdrop-filter: blur(4px);
            background-color: rgba(255, 255, 255, .1);
            z-index: 9;

            visibility:hidden;
            opacity:0;
        }

        .lead-section.active{
            visibility:visible;
            opacity:1;
        }

        .lead-section.active .glass-form{
            transform:scale(1);
            opacity:1;
        }

        /* Glass Card */

        .glass-form{
            width:100%;
            max-width:500px;
            padding: 1rem;

            border-radius:20px;

            backdrop-filter: blur(20px);
            background: linear-gradient(135deg,#0f172a,#1e293b);

            border:1px solid rgba(255,255,255,0.15);

            box-shadow:
                0 20px 60px rgba(0,0,0,0.5),
                inset 0 1px 0 rgba(255,255,255,0.2);

            color:white;
        }

        /* Title */

        .glass-form h2{
            font-size: 1.5rem;
            margin-bottom:10px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }

        .form-subtitle{
            font-size:14px;
            opacity:0.8;
            margin-bottom:30px;
        }

        /* Gold highlight */

        .gold-text{
            background: linear-gradient(135deg,#ffd700,#ffb300,#fff3a0);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            font-weight:900;
        }

        /* Input group */

        .input-group{
            position:relative;
            margin-bottom:25px;
        }

        .input-group input,
        .input-group textarea{

            width:100%;
            padding:.5rem;

            border-radius:10px;
            border:1px solid rgba(255,255,255,0.2);

            background: rgba(255,255,255,0.05);
            color:white;

            outline:none;

            transition: all 0.3s ease;
        }

        /* Focus effect */

        .input-group input:focus,
        .input-group textarea:focus{

            border:1px solid #ffd700;

            box-shadow:
                0 0 10px rgba(255,215,0,0.5);
        }

        /* Floating label */

        .input-group label{
            position:absolute;
            left:12px;
            top:50%;
            transform:translateY(-50%);
            font-size: .9rem;
            color:rgba(255,255,255,0.7);
            pointer-events:none;

            transition:0.3s;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label,
        .input-group textarea:focus + label{
            top: 0;
            font-size: .7rem;
            background: linear-gradient(135deg,#ffd700,#ffb300);
            padding:0 6px;
            color: #0f172a;
            border-radius: 10px;
        }
        .input-group textarea{
            height: 100px;
        }

        /* CTA Button */

        .cta-btn{

            width:100%;
            padding:.7rem;

            border:none;
            border-radius:12px;

            font-size:16px;
            font-weight:700;

            background: linear-gradient(135deg,#ffd700,#ffb300);

            color:#111;

            cursor:pointer;

            transition:all 0.3s ease;

            box-shadow:
                0 10px 25px rgba(255,215,0,0.35);
        }

        .cta-btn:hover{

            transform:translateY(-2px);

            box-shadow:
                0 15px 35px rgba(255,215,0,0.5);
        }

        @media all and (min-width: 485px) {
            .glass-form h2{
                font-size: 1.7rem;
            }
        }
        @media all and (min-width: 575px) {
            .glass-form h2{
                font-size: 40px;
            }
            .input-group input,
            .input-group textarea{
                padding: 16px;
            }
            .input-group label{
                font-size: 14px;
            }
            .input-group input:focus + label,
            .input-group input:not(:placeholder-shown) + label,
            .input-group textarea:focus + label{
                font-size: 12px;
            }
            .cta-btn{
                padding:18px;
            }
        }


        #toast-container{
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .toast{
            min-width: 280px;
            max-width: 350px;

            padding:16px 20px;
            border-radius:10px;

            color:#fff;
            font-size:14px;
            font-weight:500;

            box-shadow:0 10px 30px rgba(0,0,0,0.3);

            opacity:0;
            transform:translateX(100%);

            animation:toastIn .4s forwards;
        }

        .toast-success{
            background:linear-gradient(135deg,#28a745,#3ddc84);
        }

        .toast-error{
            background:linear-gradient(135deg,#dc3545,#ff6b6b);
        }

        @keyframes toastIn{
            to{
                opacity:1;
                transform:translateX(0);
            }
        }

        @keyframes toastOut{
            to{
                opacity:0;
                transform:translateX(120%);
            }
        }

        #toast-container > div{
            box-shadow:0 10px 30px rgba(0,0,0,0.4);
            border-radius:10px;
        }
    </style>
@endsection

@section('main-content')
    <!-- Hero Section Start -->
    <div class="hero parallaxie" style="background-image: url({{ asset("assets/images/landing/bg.jpeg") }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Concevez la cuisine qui vous ressemble avec l’accompagnement de nos experts.</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Jusqu’à <span class="gold-highlight">2000€</span> d’avantages sur votre cuisine sur mesure</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Profitez jusqu’à 2000€ d’avantages pour concrétiser votre projet cuisine.
                                Choisissez les avantages qui correspondent le mieux à votre projet.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"> Livraison de votre cuisine en 48h par magasin</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="javascript:;" class="btn-default open-form-btn" id="openForm">Obtenir mon devis</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <section class="lead-section"  id="formModal">
        <form class="glass-form" action="{{ route("landing.page") }}" method="POST">
            @csrf
            <h2>Profitez de <br> <span class="gold-text">2000€ d’avantages</span></h2>
            <p class="form-subtitle">Remplissez ce formulaire et notre équipe vous contacte rapidement.</p>

            <div class="input-group">
                <input type="text" name="nom" required>
                <label>Nom</label>
            </div>

            <div class="input-group">
                <input type="tel" name="telephone" required>
                <label>Téléphone</label>
            </div>

            <div class="input-group">
                <input type="text" name="ville" required>
                <label>Ville</label>
            </div>

            <div class="input-group">
                <textarea name="projet" rows="3" required></textarea>
                <label>Projet cuisine</label>
            </div>

            <button type="submit" class="cta-btn">
                Obtenir mon devis
            </button>

        </form>
    </section>

    @section('scripts')
        @parent
    <script>

        const openBtn = document.getElementById("openForm");
        const modal = document.getElementById("formModal");
        const form = document.querySelector(".glass-form");

        // ouvrir
        openBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modal.classList.add("active");
        });

        // fermer si on clique sur l'overlay
        modal.addEventListener("click", () => {
            modal.classList.remove("active");
        });

        // empêcher la fermeture si on clique dans le formulaire
        form.addEventListener("click", (e) => {
            e.stopPropagation();
        });

    </script>

    <script>

        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showDuration": "300",
            "hideDuration": "300",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        form.addEventListener("submit", function(e){

            e.preventDefault();

            const formData = new FormData(form);

            fetch(form.action,{
                method:"POST",
                headers:{
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body:formData
            })
                .then(res => res.json())
                .then(data => {

                    if(data.errors){

                        toastr.error(data.errors.join("<br>"), "Erreur");

                    }

                    if(data.success){
                        modal.classList.remove("active");
                        form.reset();
                        toastr.success("Votre demande a été envoyée avec succès !", "Succès");
                    }

                })
                .catch(err => {
                    console.error(err);
                });

        });

    </script>
    @endsection
@endsection
