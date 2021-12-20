<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Snack 5
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
        Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 5</title>
</head>
<body>
    <h1>La Storia dei Doni della Morte</h1>
    <?php
        $text = "C'erano una volta tre fratelli che viaggiavano lungo una strada tortuosa e solitaria al calar del sole. Dopo qualche tempo, i fratelli giunsero a un fiume troppo profondo per guardarlo e troppo pericoloso per attraversarlo a nuoto. Tuttavia erano versati nelle arti magiche, e così bastò loro agitare le bacchette per far comparire un ponte sopra le acque infide. Ne avevano percorso metà quando si trovarono il passo sbarrato da una figura incappucciata. E la Morte parlò a loro. Era arrabbiata perché tre nuove vittime l'avevano appena imbrogliata: di solito i viaggiatori annegavano nel fiume.
        Ma la Morte era astuta. Finse di congratularsi con i tre fratelli per la loro magia e disse che ciascuno di loro meritava un premio per essere stato tanto abile da sfuggirle.
        Così il fratello maggiore, che era un uomo bellicoso, chiese una bacchetta più potente di qualunque altra al mondo: una bacchetta che facesse vincere al suo possessore ogni duello, una bacchetta degna di un mago che aveva battuto la Morte! Così la Morte si avvicino a un albero di sambuco sulla riva del fiume, prese un ramo e ne fece una bacchetta, che diede al fratello maggiore.
        Il secondo fratello, che era un uomo arrogante, decise che voleva umiliare ancora di più la Morte e chiese il potere di richiamare altri dalla Morte. Così la Morte raccolse un sasso dalla riva del fiume e lo diede al secondo fratello, dicendogli che quel sasso aveva il potere di riportare in vita i morti.
        Infine la Morte chiese al terzo fratello, il minore, che cosa desiderava. Il fratello più giovane era il più umile e anche il più saggio dei tre, e non si fidava della Morte. Perciò chiese qualcosa che gli permettesse di andarsene senza essere seguito da lei. E la Morte, con estrema riluttanza, gli consegnò il proprio Mantello dell'Invisibilità.
        Poi la Morte si scansò e consentì ai tre fratelli di continuare il loro cammino, e così essi fecero, discutendo con meraviglia dell'avventura che avevano vissuto e ammirando i premi che la Morte aveva loro elargito.";
                                                                                

        echo "$text";

        echo "<h3>Suddiviso in ogni punto un nuovo paragrafo.</h3>";
        
        $textArr= explode(".", $text);
        
        foreach ($textArr as $paragrphs) {
            echo "<p>$paragrphs</p>";
        }
    ?>
    
</body>
</html>