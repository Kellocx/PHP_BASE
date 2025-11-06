<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellina</title>
</head>

<body>
    <form action="" method="get">

        Inserisci numero : <input type="number" name="numero">

        <input type="submit">
        <input type="submit" value="MOSTRA TABELLINA">



    </form>
    <?php
    if(isset ($_POST["numero"])){
        $num = $_POST['numero'];
   
    

    // Stampo la tabellina del numero inserito
    echo "Tabellina del numero $numeroInserito: ";
    for ($i = 0; $i <= 10; $i++) {
      
        echo "$num x $i = ". ($num * $i) . "br";
        }
    }
    ?>



</body>

</html>