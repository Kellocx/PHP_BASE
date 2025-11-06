<?php

    if(isset($_GET['parola'])){

        //prendo il dato inserito e tramite il metodo STRTOLOWER CONVERTO IN MINUSCOLO
        $parola = strtolower($_GET['parola']); //converto in minuscolo

        $parolaInvertita = strrev($parola); // inversione della stringa


        if( $parola == $parolaInvertita ){

            echo "<p>La parola $parola è palindroma </p>";
        }else {


            echo "<p>La parola $parola non è palindroma</p>";
        }

    }
?>