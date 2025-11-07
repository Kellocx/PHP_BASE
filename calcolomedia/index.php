<?php
//isset: controllo se il valore inserito è diverso da !null quindi deve essere presente
if (isset($_POST['n1'], $_POST['n2'], $_POST['n3'])) { // se esistono

    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $n3 = (float) $_POST['n3'];

    //calcolo della media
    $media = ($n1 + $n2 + $n3) / 3;

    echo "La media dei numeri è " . number_format($media, 2);
}//concatenazione nell'echo con il punto e lo spazio prima e dopo
?>




<form action="" method="post">


    Primo Numero : <input type="decimal" name="n1">

    Secondo Numero : <input type="decimal" name="n2">

    Terzo Numero : <input type="decimal" name="n3">

    <input type="submit" value="calcola media">
  <!--bottone invia -->

</form>