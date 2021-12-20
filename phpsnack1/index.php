<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SNACK 1
        Creiamo un array contenente le partite di basket di un" potetica tappa del calendario. Ogni array
        avra una squadra di casa e una squadra ospite, punt fatti dalla squadra di casa e punt fatti dalla
        squadra spite. Stamplamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantu / 55-60 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php Snack 1</title>

</head>
<body>
    <img src="img/lba_logo.png" alt="logo">
    <h1>LEGA BASKET SERIE A - 12° Giornata 19/12/2021</h1>
    <?php
        $round = [
            [
                "homeTeam" => 'Bertram Derthona Basket Tortona ',
                "visitorTeam" => 'Umana Reyer Venezia ',
                "homePoints" => 77,
                "visitorPoints" => 65
            ],
            [
                "homeTeam" => 'Allianz Pallacanestro Trieste  ',
                "visitorTeam" => 'A|X Armani Exchange Milano  ',
                "homePoints" => 71,
                "visitorPoints" => 68
            ],
            [
                "homeTeam" => 'GeVi Napoli Basket ',
                "visitorTeam" => 'Dolomiti Energia Trentino  ',
                "homePoints" => 72,
                "visitorPoints" => 81
            ],
            [
                "homeTeam" => 'Virtus Segafredo Bologna ',
                "visitorTeam" => 'Fortitudo Kigili Bologna  ',
                "homePoints" => 76,
                "visitorPoints" => 70
            ],
            [
                "homeTeam" => 'Carpegna Prosciutto Pesaro  ',
                "visitorTeam" => 'UNAHOTELS Reggio Emilia ',
                "homePoints" => 69,
                "visitorPoints" => 72
            ],
            [
                "homeTeam" => 'Happy Casa Brindisi ',
                "visitorTeam" => 'NutriBullet Treviso Basket ',
                "homePoints" => 99,
                "visitorPoints" => 95
            ],
            [
                "homeTeam" => 'Banco di Sardegna Sassari  ',
                "visitorTeam" => ' Openjobmetis Varese ',
                "homePoints" => 104,
                "visitorPoints" => 99
            ],
            [
                "homeTeam" => ' Germani Brescia  ',
                "visitorTeam" => 'NutriBullet Treviso Basket  ',
                "homePoints" => 86,
                "visitorPoints" => 73
            ],
            

        ];
    
    
    
    
            
        foreach($round as ["homeTeam" => $homeTeam, "visitorTeam" => $visitorTeam, "homePoints" => $homePoints, "visitorPoints" => $visitorPoints  ]) {
        echo "<p> <strong>$homeTeam</strong>- <strong>$visitorTeam</strong> / $homePoints - $visitorPoints \n<p>";

        }

    ?>
</body>
</html>