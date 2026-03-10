{{-- resources/views/emails/contact-us.blade.php --}}
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact CuisineHabitat.re</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-top: 6px solid #FF6F3C; /* accent color */
        }
        .header {
            background-color: #FF6F3C;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            padding: 30px 25px;
        }
        .content p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .content .label {
            font-weight: bold;
            color: #FF6F3C;
        }
        .footer {
            background-color: #f9f9f9;
            color: #777;
            text-align: center;
            padding: 20px;
            font-size: 12px;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #FF6F3C;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        @media (max-width: 620px) {
            .email-container {
                margin: 20px;
            }
            .header {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        Nouveau message depuis CuisineHabitat.re
    </div>
    <div class="content">
        <p>Vous avez reçu un nouveau message via le formulaire de contact :</p>

        <p><span class="label">Nom :</span> {{ $data->name }}</p>
        <p><span class="label">Email :</span> {{ $data->email }}</p>
        <p><span class="label">Téléphone :</span> {{ $data->phone }}</p>
        <p><span class="label">Ville :</span> {{ ucfirst($data->city) }}</p>
        <p><span class="label">Message :</span></p>
        <p style="background-color:#f4f4f4; padding:15px; border-radius:8px;">{{ $data->message }}</p>

        <p>Pour répondre, cliquez sur le bouton ci-dessous :</p>
        <a href="mailto:{{ $data->email }}" class="button">Répondre à {{ $data->name }}</a>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} CuisineHabitat.re — Tous droits réservés
    </div>
</div>
</body>
</html>
