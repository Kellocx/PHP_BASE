<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellina</title>
</head>

<body>

    <?php
    // Chiedo all'utente di inserire un numero
    $numeroInserito = (int)("Inserisci un numero: ");

    // Stampo la tabellina del numero inserito
    echo "Tabellina del numero $numeroInserito:\n";
    for ($i = 1; $i <= 10; $i++) {
        $risultato = $numeroInserito * $i;
        echo "$numeroInserito x $i = $risultato\n";
    }
    ?>
   

    
</body>

</html>