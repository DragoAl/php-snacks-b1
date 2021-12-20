<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SNACK 4
        Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 4</title>

    <style>
        div {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            background-color: blue;
            color: white;
            font-size: 24px;
            margin: 10px;
            text-align: center;
            line-height: 40px;
            vertical-align: middle;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>15 Random and different Numbers</h1>
    <?php
 

    $numbArr = [];
    while( count($numbArr) < 15) {
        $number = rand(1, 50);
        if(!in_array($number, $numbArr)) {
            $numbArr[] = $number;
            // print_r($numbArr) ;
        }
    }

    foreach ($numbArr as $numb) {
        echo "<div>$numb</div>" ;
    }
    

        
    ?>
    
</body>
</html>