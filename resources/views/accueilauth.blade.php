<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur GSB-Frais</h1>
        <p>{{ $bruh }}</p>
        <p>Choisis ton activité : </p>
        <div>
            @if($bruh->fonction == 'Visiteur') <!-- Check if the function is 'Comptable' -->
                <a href="/visiteurM/renseignerFF" class="btn">Renseigner Fiche Frais</a>
                <a href="/visiteurM/consulterFF" class="btn">Consulter Fiche Frais</a>
            @endif
            
            @if($bruh->fonction == 'Comptable') <!-- Check if the function is 'Comptable' -->
                <a href="/visiteurM/validerFF" class="btn">Valider Fiche de frais</a> <!-- New button -->
                <a href="/visiteurM/suivreFF" class="btn">Suivre paiement Fiche de frais</a> <!-- New button -->
            @endif
        </div>
    </div>
</body>
</html>
