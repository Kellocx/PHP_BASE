<?php


// voglio contare quante vocali ci sono in una frase (stringa)

if (isset($_POST['frase'])) {


    $frase = strtolower($_POST['frase']); // rendo minuscolo con strtolower

    //definisco le vocali al pc
    $vocali = ["a", "e", "i", "o", "u"];

    //inizializzo contenitore counter per avere il numero di vocali
    $contaNumeroVocali = 0;

    //scorre ogni carattere della frase
    //strlen -> è la lunghezza dell array ( .lenght di js )
    for ($i = 0; $i < strlen($frase); $i++) {

        //verifica se un valore è presente nell array
        if (in_array($frase[$i], $vocali)) {  //prendo $i della frase e confronto con $vocali

            $contaNumeroVocali++; //incremento il numero di vocali trovate
        }
    }

    echo " <p>La frase contiene $contaNumeroVocali vocali</p>";
}
?>



<form action="" method="post">

    Inserisci una frase : <input type="text" name="frase">
    <input type="submit" value="conta vocali">


</form>