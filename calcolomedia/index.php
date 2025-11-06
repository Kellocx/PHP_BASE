<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcolo la Media</title>
    </head>

    <body>
        <h1>Inserisci 5 numeri</h1>
        <form method="post">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                Inserisci 5 Numeri 
                <input type="number" name="numeri[]" required>
                <br>
            <?php endfor; ?>
            <input type="submit" value="Calcola Media">
        </form>

        <?php
      
            $numeri = $_POST['numeri'];
            $somma = array_sum($numeri);
            $media += $somma / count($numeri);
            echo "<h2>La media dei numeri inseriti è: " . number_format($media, 2) . "</h2>";
        
        ?>
    </body>

    </html>


</body>

</html>