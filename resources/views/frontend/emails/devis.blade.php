{{-- resources/views/emails/landing-lead.blade.php --}}
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau lead – Offre Cuisine</title>

    <style>
        body{
            font-family:'Segoe UI',Roboto,sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:0;
            color:#333;
        }

        .email-container{
            max-width:600px;
            margin:40px auto;
            background:#ffffff;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            border-top:6px solid #FFD700;
        }

        .header{
            background:#0f172a;
            color:#FFD700;
            padding:20px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
        }

        .content{
            padding:30px 25px;
        }

        .content p{
            margin:10px 0;
            line-height:1.6;
        }

        .label{
            font-weight:bold;
            color:#0f172a;
        }

        .projet{
            background:#f4f4f4;
            padding:15px;
            border-radius:8px;
        }

        .button{
            display:inline-block;
            margin-top:20px;
            padding:12px 25px;
            background:#FFD700;
            color:#000;
            text-decoration:none;
            border-radius:6px;
            font-weight:bold;
        }

        .footer{
            background:#f9f9f9;
            color:#777;
            text-align:center;
            padding:20px;
            font-size:12px;
        }

        @media(max-width:620px){
            .email-container{
                margin:20px;
            }
        }
    </style>
</head>

<body>

<div class="email-container">

    <div class="header">
        Nouveau lead – Offre 2000€ Cuisine
    </div>

    <div class="content">

        <p>Un visiteur est intéressé par l'offre <strong>2000€ d’avantages sur une cuisine</strong>.</p>

        <p><span class="label">Nom :</span> {{ $data->nom }}</p>

        <p><span class="label">Téléphone :</span>
            <a href="tel:{{ $data->telephone }}">{{ $data->telephone }}</a>
        </p>

        <p><span class="label">Ville :</span> {{ ucfirst($data->ville) }}</p>

        <p><span class="label">Projet cuisine :</span></p>

        <p class="projet">
            {{ $data->projet }}
        </p>

        <a href="tel:{{ $data->telephone }}" class="button">
            Appeler le client
        </a>

    </div>

    <div class="footer">
        © {{ date('Y') }} CuisineHabitat.re — Lead généré depuis la landing page.
    </div>

</div>

</body>
</html>
