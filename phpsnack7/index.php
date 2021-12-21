<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Snack 7
        Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 7</title>
</head>
<body>
    <h1>A very strange and short class</h1>
    <?php
        $class = [
            [
                'name'=> 'Peter',
                'surname' => 'Parker',
                'mathvote' => 10,
                'itavote' => 8,
                'codevote' => 9,
                'sciencevote' => 10

            ],
            [
                'name'=> 'Jessy',
                'surname' => 'Pinkman',
                'mathvote' => 2,
                'itavote' => 7,
                'codevote' => 3,
                'sciencevote' => 3

            ],
            [
                'name'=> 'Walter',
                'surname' => 'White',
                'mathvote' => 10,
                'itavote' => 6,
                'codevote' => 8,
                'sciencevote' => 10

            ],
            [
                'name'=> 'Alberto',
                'surname' => 'Dragoni',
                'mathvote' => 8,
                'itavote' => 5,
                'codevote' => 9,
                'sciencevote' => 8

            ],
        ];

        // foreach($class as ["name" => $name, "surname" => $surname, "mathvote" => $mathvote, "itavote" => $itavote, "codevote" => $codevote, "sciencevote" => $sciencevote  ]) {
        //     $sumVote = $mathvote += $itavote += $codevote += $sciencevote;
        //     $avgVote = $sumVote / 4;


        //     echo "<p> <strong>$name</strong> <strong>$surname</strong> <br> 'La media dei voti è :' $avgVote  \n<p>";
        // }       

        foreach ($class as $student) {
            $sumVote = $student['mathvote'] += $student['itavote'] += $student['codevote'] += $student['sciencevote'];
            $avgVote = $sumVote / 4;

            echo $student['name']  . $student['surname'] . "<br>" . "La media dei voti è :" . $avgVote . "<br>"."<br>"  ;
            
        }

    ?>
    
</body>
</html>