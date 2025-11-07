<?php
//importo il file funzction per utilizzare le funzioni
require_once 'function.php';


//------------------ SALAVATAGGIO SESSION STORAGE ------------
//Inizializzo la rubrica. con la sessione

session_start();

if (!isset($_SESSION['rubrica'])) {
    $_SESSION['rubrica'] = []; //prima volta : rubrica nella sessione del browser
}

//Devo far riferimento all'array della seessione con &

$rubrica = &$_SESSION['rubrica'];

//--------------------------------------------------

//Gestione invio form. per aggiungere conattto

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $name = ($_POST['name']); //prendo nome e lo salvo in variabile
    $phone = ($_POST['phone']); // prendo numero

    if ($name && $phone) {
        addContact($rubrica, $name, $phone); //aggiungo contatto alal rubrica

        $message = "CONTATTO AGGIUNTO";
    } else {
        $message = "Inserisci un nome e un numero di telefono in rubrica";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica Contatti</title>
</head>

<body>
    <h1>Rubrica Contatti</h1><br>

    <h2>Aggiungi Contatto</h2>

    <form action="" method="post">
        Nome: <input type="text" name="name">
        Telefono: <input type="text" name="phone">

        <button type="submit" name="add">Aggiungi contatto</button>



    </form>

    <h2>Ricerca Contatto</h2>

    <form action="" method="post">
        Nome: <input type="text" name="serach_name">


        <button type="submit" name="search">Cerca</button>



    </form>
    <h2>Elenco Contatti</h2>

    <?php

    printContacts($rubrica);
    ?>

    <h2>Debug sessione</h2>

    <pre> 
        <?php
        print_r($_SESSION);

        ?>
    </pre>


</body>

</html>