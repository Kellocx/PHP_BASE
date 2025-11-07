<?php


// voglio contare quante vocali ci sono in una frase (stringa)

if (isset($_POST['frase'])) {


    $frase = strtolower($_POST['frase']); // rendo minuscolo con strtolower

    //definisco le vocali al pc (hardcoded)
    $vocali = ["a", "e", "i", "o", "u"];

    //inizializzo contenitore counter per avere il numero di vocali PAAROLA. 
    //ad ogni ciclo per tutta la lunghezza della frase
    //se un valore esiste nell'array lo prendo e lo aggiungo al counter
    $contaNumeroVocali = 0;

    //scorre ogni carattere della frase
    //strlen -> è la lunghezza dell array ( .lenghth di js )
    for ($i = 0; $i < strlen($frase); $i++) {

        //verifica se un valore (vocali ) è presente nell array
        if (in_array($frase[$i], $vocali)) {  //prendo $i della frase e confronto con $vocali
        //inizializzo contenitore counter per avere il numero delle vocali in PAROLA
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