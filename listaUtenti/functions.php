<?php

//importo la classe Contact
require_once 'Contact.php';

//funzione che aggiunge un contatto alla rubrica
function addContact(array &$rubrica, string $name, string $phone): void
{   //void è un tipo di ritorno, posso anche ometterlo ma significa che restituisce nulla

    //devo creare un oggetto contatto che si aggiunge all array rubrica
    $rubrica[] = new Contact($name, $phone);
}


//funzione che stampa tutti i contatti quindigli oggetti della rubrica salvata nella sessione
function printContact(array &$rubrica): void
{

    foreach ($rubrica as $contatto) {

        echo $contatto->getInfo() . "<br>"; //vado a recuperare il metodo getInfo()

    }
}


//ricerca del contatto per nome, restituisco l oggetto o null
function searchContact(array $rubrica, string $name): ?Contact
{

    foreach ($rubrica as $contatto) {

        if (strtolower($contatto->name) === strtolower($name)) {

            return $contatto;
        }
    }

    return null; // nessun contatto trovato

}
?>