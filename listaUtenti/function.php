<?php
//importo oa classe contact per creare oggetti/contatti
require_once 'contact.php';


function addContact(array &$rubrica, string $name, string $phone) : void{
    
    // devo creare un oggettto contatto che si aggiunge all'array rubrica
    $rubrica[] = new Contact($name, $phone);
}


//funzion eper stampare tutti i contatti, quindi laa rubrica slavata in sessione
function printContacts(array &$rubrica) : void {
    foreach ($rubrica as $contatto){

        echo $contatto->getInfo() . "<br>"; //vado a recuperare il metodo get info() della classe

    }
}

?>