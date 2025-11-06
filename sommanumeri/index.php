<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somma numeri</title>
</head>

<body>
    <?php
    //definisco array di numeri
    $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    //definisco contenitore somma
    $somma = 0;

    //ciclo array di numeri

    foreach($numeri as $num){
        $somma += $num;
    }

    echo "La somma dei numeri è:  $somma";

    ?>


</body>

</html>