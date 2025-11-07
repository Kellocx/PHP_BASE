
<!--------------------------VARIE------------------>

<?php 
    //commento unica riga
    /*commento su piu righe */

    //string -> stringa
    //int -> numero intero
    //float -> numero decimale
    //bool -> booleano (vero o falso)

    /* Dichiarazione di una variabile (in questo caso array) :  con $  */
    $nome = ['pippo','paperino'];

    //stampa a schermo qualcosa : echo mostra il valore
    //echo " $nome, questa funzione stampa a schermo   ";

    //var_dump mostra il valore, il tipo e la lunghezza
    //var_dump($nome);

?>


<!--------------------------VARIABILI------------------>

<?php

    $nome = "Luca"; // string
    $eta = 35; // int

    //echo "Ciao $nome, hai $eta anni!";

    //var_dump($nome);




?>


<!--------------------------COSTANTI------------------>


<?php

    //Modo per definire costanti
    //.    nome costante, valore, 
    define("tassa_stato", 26);
    define("inps", 15);
    define("commercialista", 800);

    //echo tassa_stato;
    //echo inps;
    //echo commercialista;

    


?>


<!--------------------------CONDIZIONI IF-ELSE------------------>

<?php  

    $numero = 5;

    if($numero > 0 ){

        //echo "positivo";
    }else {

        //echo "negativo o zero";
    }


?>

<!--------------------------SWITCH CASE------------------>


<?php

    // Il costrutto switch case break default viene utilizzato per non annidare troppi if-else

    $colore = "Rosso";

    switch ($colore){

        case "Rosso":
            //echo "Hai scelto Rosso";
            break;

        case "Giallo":
            //echo "Hai scelto Giallo";
            break;

        case "Verde":
            //echo "Hai scelto Verde";
            break;

        default :
            //echo "Nessun colore riconosciuto";
        
    }
?>



<!--------------------------CICLO FOR------------------------>

<?php

    for($i = 0; $i <= 5; $i++){

        //echo "numero $i <br>";

    }


?>


<!--------------------------CICLO WHILE (FINTANTO CHE...)------------------------->

<?php

    $i = 1;

    while ($i <= 3){

        //echo "valore : $i <br>";
        $i++;
    }

?>


<!---------------------------------------------CICLO FOREACH------------------------>


<?php

    //DATO UN ARRAY DI NOMI , STAMPARE TUTTI I NOMI SINGOLARMENTE

    echo "<h5>Titolo</h5>";

    $nomi = ["Pippo", "Paperino", "Pluto"];

    foreach($nomi as $nome){

        echo "$nome <br>";
    }



?>


<!---------------------------------------------FUNZIONI------------------------>


<?php


    function saluta($nome){


        return "Ciao, $nome";

    }

    echo saluta("diego");
    echo saluta("marco");



?>
