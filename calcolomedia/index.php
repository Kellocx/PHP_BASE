<?php

if (isset($_POST['n1'], $_POST['n2'], $_POST['n3'])) {

    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $n3 = (float) $_POST['n3'];

    //calcolo della media
    $media = ($n1 + $n2 + $n3) / 3;

    echo "La media dei numeri è " . number_format($media, 2);
}
?>




<form action="" method="post">


    Primo Numero : <input type="decimal" name="n1">

    Secondo Numero : <input type="decimal" name="n2">

    Terzo Numero : <input type="decimal" name="n3">

    <input type="submit" value="calcola media">


</form>