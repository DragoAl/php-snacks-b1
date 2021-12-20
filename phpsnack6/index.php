<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SNACK 6
        Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Php Snack 6</title>
</head>
<body>
    <?php
    
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        $keys = array_keys($db);
        for ($i=0; $i< count($keys); $i++) {
            $key = $keys[$i];
           if ($keys[$i] === 'teachers') {
            foreach(($db[$key]) as ['name' => $name, 'lastname' => $lastname]){
                echo "<div class= 'box teachers'> $name <br> $lastname </div>";
            }
           } else {
                foreach(($db[$key]) as ['name' => $name, 'lastname' => $lastname]){
                    echo "<div class='box pm'> $name <br> $lastname </div>";
                } 
            }


        
        }
    ?>
    
</body>
</html>