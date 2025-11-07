<?php
//se ho il numero lo salvo
if (isset($_POST['numero'])) {

    $num = $_POST['numero'];

    for ($i = 0; $i <= 10; $i++) {

        echo "$num x $i = " . ($num * $i) . "<br>";//numero inserito xi = alla concatenaziione del risultato della moltiplicazione
    }
}
?>



<form action="" method="post">

    Inserisci un numero :

    <input type="numer" name="numero">
    <input type="submit" value="Mostra atabellina">

</form>