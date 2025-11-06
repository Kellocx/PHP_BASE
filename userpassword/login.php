<?php

if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
// Verifica credenziali
$valid_username = "admin";
$valid_password = "pw123";



    // Controlla se le credenziali sono corrette
    if ($username === $valid_username && $password === $valid_password) {
        echo "Ti sei loggato  correttamente", ($username) ;
    } else {
        echo "Credenziali errate. Riprova.";
    }

?>