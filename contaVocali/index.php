<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContaVocali</title>
</head>
<body>
    <?php

    if(isset($_POST['frase'])){
        $frase = strtolower($_POST['frase']);

        $vocali = ["a", "e", "i", "o", "u"];// dichiaro le vocali

        $contaVocali = 0;

        for($i = 0; $i <($frase); $i++){
            if(in_array($frase[$i], $vocali)){
                $contaVocali++;
            }
        }
        echo "<p> La frase contine $contavocali vocali";
    }




    ?>
    
</body>
</html>