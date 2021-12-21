<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SNACK 3
        Creare un array di array. 
        Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
        Stampare ogni data con i relativi post.
        Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 3</title>
</head>
<body>
    <?php

        $posts = [

            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
        // funzione per ottendere le chiavi dell'array, $dataKeys array sequenziale
        $dateKeys= array_keys($posts);
        
        // ciclo sulla lunghezza dell'array ottenuto 
        for ($i=0; $i< count($dateKeys); $i++) {
            $dateKey = $dateKeys[$i];

            echo '<h2>'. $dateKey .'</h2>';
            // prendo i post dentro l'array di ogni singola chiave(data)
            $subPosts = $posts[$dateKey]; 
            for ($y = 0; $y< count($subPosts); $y++) {
                $post = $subPosts[$y];

                echo '<p>'.$post['title']. '<br>'.$post['author'].'<br>'  .$post['text']. '</p>';

            }
           

        }

            // foreach(($posts[$key]) as ['title' => $title, 'author' => $author, 'text' => $text]){
            //     echo "<p> $title <br> $author <br> $text</p>";
            // }
         
    ?>
    
</body>
</html>