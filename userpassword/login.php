<?php
//salvo l'utente inserito
if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    //salvo la password inserita
    $password = $_POST['password'];
}
// Verifica credenziali (hardcoded: sto inserendo i valori dentro al codice, valori dentro al codice) le credenziLI che servono per acceder
$valid_username = "admin";
$valid_password = "pw123";



    // Controlla se le credenziali sono corrette
    if ($username === $valid_username && $password === $valid_password) {
        echo "Ti sei loggato  correttamente", ($username) ;
    } else {
        echo "Credenziali errate. Riprova.";
    }

?>